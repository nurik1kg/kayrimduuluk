<?php

namespace backend\controllers;

use app\models\Galery;
use Yii;
use app\models\Reports;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ReportsController implements the CRUD actions for Reports model.
 */
class ReportsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'only' => ['index','create','update','view','delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Reports models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Reports::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reports model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Reports model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Reports();

        if ($model->load(Yii::$app->request->post())) {
            $images = UploadedFile::getInstances($model, 'imageFiles');
            $model->date = date("Y-m-d H:i:s", strtotime($model->date));
            $model->save();
            foreach ($images as $i => $image) {
                if ($image && $image->size !== 0) {
                    $a = explode(".", $image->name);
                    $ext = end($a);

                    // generate a unique file name
                    $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                    // the path to save file, you can set an uploadPath
                    // in Yii::$app->params (as used in example below)
                    $fileDir = '../../frontend/web/'. Yii::$app->params['urlReports'];
                    if (!is_dir($fileDir)) {
                        @mkdir($fileDir, 0777, true);
                        @chmod('uploads', 0777);
                        @chmod($fileDir, 0777);
                    }
                    $image->saveAs($fileDir . $filename);
                    $save = new Galery();
                    $save->photo = $filename;
                    $save->childid = $model->id;
                    $save->save();
                }
            }
            if ($model->id)
                return $this->redirect(['view', 'id' => $model->id]);
            else
                return $this->render('create', [
                    'model' => $model,
                ]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Reports model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $photos = Galery::find()->where(['childid'=>$id])->all();

        if ($model->load(Yii::$app->request->post())) {
            $images = UploadedFile::getInstances($model, 'imageFiles');
            $model->date = date("Y-m-d H:i:s", strtotime($model->date));
            $model->save();
            foreach ($images as $i => $image) {
                if ($image && $image->size !== 0) {
                    $a = explode(".", $image->name);
                    $ext = end($a);

                    // generate a unique file name
                    $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                    // the path to save file, you can set an uploadPath
                    // in Yii::$app->params (as used in example below)
                    $fileDir = '../../frontend/web/'. Yii::$app->params['urlReports'];
                    if (!is_dir($fileDir)) {
                        @mkdir($fileDir, 0777, true);
                        @chmod('uploads', 0777);
                        @chmod($fileDir, 0777);
                    }
                    $image->saveAs($fileDir . $filename);
                    $save = new Galery();
                    $save->photo = $filename;
                    $save->childid = $model->id;
                    $save->save();
                }
            }
            if ($model->id)
                return $this->redirect(['view', 'id' => $model->id]);
            else {
                return $this->render('update', [
                    'model' => $model,
                    'photos' => $photos,

                ]);
            }
        }
        else {
            return $this->render('update', [
                'model' => $model,
                'photos' => $photos,

            ]);
        }
    }

    /**
     * Deletes an existing Reports model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reports model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Reports the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reports::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionPhotodelete($id){
        $delete = Galery::findOne($id);
        $model = $this->findModel($delete->childid);
        $delete->delete();
        return Yii::$app->response->redirect(Url::to(['update', 'id' => $model->id]));
    }
}
