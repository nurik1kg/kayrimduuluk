<?php

namespace backend\controllers;

use Yii;
use app\models\People;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PeopleController implements the CRUD actions for People model.
 */
class PeopleController extends Controller
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
     * Lists all People models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => People::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single People model.
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
     * Creates a new People model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new People();

        if ($model->load(Yii::$app->request->post())) {
            $photo = UploadedFile::getInstance($model, 'imageFile1');
            $photo2 = UploadedFile::getInstance($model, 'imageFile2');
            $model->birthday = date("Y-m-d H:i:s", strtotime($model->birthday));
            if ($photo && $photo->size !== 0) {
                $a = explode(".", $photo->name);
                $ext = end($a);

                // generate a unique file name
                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                $fileDir = '../../frontend/web/' . Yii::$app->params['urlPeople'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }
                $photo->saveAs($fileDir . $filename);
                $model->logo = $filename;
                $model->save();
//                return $this->redirect(['view', 'id' => $model->id]);
            }
            else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
            if ($photo2 && $photo2->size !== 0) {
                $a = explode(".", $photo2->name);
                $ext = end($a);

                // generate a unique file name
                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                $fileDir = '../../frontend/web/' . Yii::$app->params['urlPeople'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }
                $photo2->saveAs($fileDir . $filename);
                $model->image = $filename;
                $model->save();
//                return $this->redirect(['view', 'id' => $model->id]);
            }
            else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing People model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_logo = $model->logo;
        $old_image = $model->image;
        if ($model->load(Yii::$app->request->post())) {
            $photo = UploadedFile::getInstance($model, 'imageFile1');
            $photo2 = UploadedFile::getInstance($model, 'imageFile2');
            $model->birthday = date("Y-m-d H:i:s", strtotime($model->birthday));
            if ($photo && $photo->size !== 0) {
                $a = explode(".", $photo->name);
                $ext = end($a);

                // generate a unique file name
                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                $fileDir = '../../frontend/web/' . Yii::$app->params['urlPeople'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }
                $photo->saveAs($fileDir . $filename);
                $model->logo = $filename;
                $model->save();
//                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                $model->logo = $old_logo;
            }
            if ($photo2 && $photo2->size !== 0) {
                $a = explode(".", $photo2->name);
                $ext = end($a);

                // generate a unique file name
                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                $fileDir = '../../frontend/web/' . Yii::$app->params['urlPeople'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }
                $photo2->saveAs($fileDir . $filename);
                $model->image = $filename;
                $model->save();
//                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                $model->image = $old_image;
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }
        else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing People model.
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
     * Finds the People model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return People the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = People::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
