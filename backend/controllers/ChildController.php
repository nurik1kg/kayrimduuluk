<?php

namespace backend\controllers;

use app\models\Galery;
use Yii;
use app\models\Child;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ChildController implements the CRUD actions for Child model.
 */
class ChildController extends Controller
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
     * Lists all Child models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Child::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Child model.
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
     * Creates a new Child model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Child();

        if ($model->load(Yii::$app->request->post())) {
            $images = UploadedFile::getInstances($model, 'imageFiles');
            $model->created_at = date("Y-m-d H:i:s");
            $model->birthday = date("Y-m-d H:i:s", strtotime($model->birthday));
            $model->save();
            foreach ($images as $i => $image) {
                if ($image && $image->size !== 0) {
                    $a = explode(".", $image->name);
                    $ext = end($a);

                    // generate a unique file name
                    $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                    // the path to save file, you can set an uploadPath
                    // in Yii::$app->params (as used in example below)
                    $fileDir = '../../frontend/web/'. Yii::$app->params['urlChild'];
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
//                    if($i == 0)
//                        $model->photo1 = $filename;
//                    elseif ($i == 1)
//                        $model->photo2 = $filename;
//                    elseif ($i ==2)
//                        $model->photo3 = $filename;
//                    elseif($i == 3)
//                        $model->photo4 =$filename;

                    //$model->photo = $filename;
                }
            }
//            return print_r($model);
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
     * Updates an existing Child model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $fileDir = '../../frontend/web/'. Yii::$app->params['urlChild'];
        $model = $this->findModel($id);
        $photos = Galery::find()->where(['childid'=>$id])->all();

//        if ($model->photo1 != 'none' && $model->photo1 != null)
//            $photos[] ='/'.Yii::$app->params['urlChild'].$model->photo1;
//        if ($model->photo2 != 'none' && $model->photo2 != null)
//            $photos[] ='/'.Yii::$app->params['urlChild'].$model->photo2;
//        if ($model->photo3 != 'none' && $model->photo3 != null)
//            $photos[] ='/'.Yii::$app->params['urlChild'].$model->photo3;
//        if ($model->photo4 != 'none' && $model->photo4 != null)
//            $photos[] ='/'.Yii::$app->params['urlChild'].$model->photo4;
        if ($model->load(Yii::$app->request->post())) {
            $fileDir = '../../frontend/web/'. Yii::$app->params['urlChild'];
            $images = UploadedFile::getInstances($model, 'imageFiles');
            $model->created_at = date("Y-m-d H:i:s");
            $model->birthday = date("Y-m-d H:i:s", strtotime($model->birthday));
            $flag = 0;
//            if ($model->photo1 != 'none' || $model->photo1 != null)
//                @unlink($fileDir . $model->photo1);
//            elseif ($model->photo2 != 'none' || $model->photo2 != null)
//                @unlink($fileDir . $model->photo2);
//            elseif ($model->photo3 != 'none' || $model->photo3 != null)
//                @unlink($fileDir . $model->photo3);
//            elseif ($model->photo4 != 'none' || $model->photo4 != null)
//                @unlink($fileDir . $model->photo4);
//            $model->photo1 = 'none';
//            $model->photo2 = 'none';
//            $model->photo3 = 'none';
//            $model->photo4 = 'none';

            foreach ($images as $i => $image) {
                if ($image && $image->size !== 0) {
                    $a = explode(".", $image->name);
                    $ext = end($a);

                    // generate a unique file name
                    $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                    // the path to save file, you can set an uploadPath
                    // in Yii::$app->params (as used in example below)
                    if (!is_dir($fileDir)) {
                        @mkdir($fileDir, 0777, true);
                        @chmod('uploads', 0777);
                        @chmod($fileDir, 0777);
                    }
                    $image->saveAs($fileDir . $filename);
//                    if($flag==0){
//                        Galery::find()->where(['childid'=>$id])->delete();
//                        $flag++;
//                    }
                    $save = new Galery();
                    $save->photo = $filename;
                    $save->childid = $id;
                    $save->save();
                }
            }
            if ($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
            else
                return $this->render('update', [
                    'model' => $model,
                    'photos' => $photos,
                ]);
        } else {

            return $this->render('update', [
                'model' => $model,
                'photos' => $photos,
            ]);
        }
    }

    /**
     * Deletes an existing Child model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $fileDir = '../../frontend/web/'.Yii::$app->params['urlChild'];
        $model = Child::findOne($id);
        $galery = Galery::find()->where(['childid'=>$model->id])->all();
        $galery->deleteAll();
        $this->findModel($id)->delete();
        return $this->redirect(['index', 'id'=>$id]);
    }

    /**
     * Finds the Child model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Child the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Child::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionPhotodelete($id){
        $delete = Galery::findOne($id);
        $model = $this->findModel($delete->childid);
        $delete->delete();
//        $photos = Galery::find()->where(['childid'=>$model->id])->all();
//        return $this->redirect('update',302);
        return Yii::$app->response->redirect(Url::to(['update', 'id' => $model->id]));
    }
}
