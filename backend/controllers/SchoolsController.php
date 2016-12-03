<?php

namespace backend\controllers;

use Yii;
use app\models\Schools;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SchoolsController implements the CRUD actions for Schools model.
 */
class SchoolsController extends Controller
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
     * Lists all Schools models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Schools::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Schools model.
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
     * Creates a new Schools model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Schools();

        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'imageFile');
            if ($image && ($image->size !== 0)) {
                $a = explode(".", $image->name);
                $ext = end($a);

                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");
                $fileDir = '../../frontend/web/' . Yii::$app->params['urlSchool'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }

                $image->saveAs($fileDir . $filename);
                chmod($fileDir . $filename, 0777);

                $model->image = $filename;
            }
            else{
                $model->image = 'none';
            }
            if ($model->save()){
                return $this->redirect(['index']);
            }
            else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Schools model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_photo = $model->image;

        if ($model->load(Yii::$app->request->post())){
            $image = UploadedFile::getInstance($model, 'imageFile');

            if ($image && ($image->size !== 0)) {
                $a = explode(".", $image->name);
                $ext = end($a);

                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");
                $fileDir = '../../frontend/web/' . Yii::$app->params['urlSchool'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }

                $image->saveAs($fileDir . $filename);
                chmod($fileDir . $filename, 0777);

                $model->image = $filename;
            }
            else {
                $model->image = $old_photo;
            }
            if ($model->save()){
                return $this->redirect(['index']);
            }
            else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Schools model.
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
     * Finds the Schools model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Schools the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Schools::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
