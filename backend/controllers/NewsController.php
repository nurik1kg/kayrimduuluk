<?php

namespace backend\controllers;

use app\models\Galery;
use common\components\UtilityComponent;
use Imagine\Image\Box;
use Yii;
use app\models\News;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\imagine\Image;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','update','view','delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index','create','update','view','delete'],
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
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex($search='')
    {
        $var = $search;
        if($search!='')
        {
            $dataProvider = new ActiveDataProvider([
                'query' => News::find()->where(['like','title_kg',$search]),
            ]);
        }
        else{
            $dataProvider = new ActiveDataProvider([
                'query' => News::find(),
            ]);
        }
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'var'=>$var,
        ]);
    }

    /**
     * Displays a single News model.
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
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post())) {
            $photo = UploadedFile::getInstance($model, 'imageFile');
            $images = UploadedFile::getInstances($model, 'imageFiles');
            $model->date = date("Y-m-d H:i:s", strtotime($model->date));
            if ($photo && $photo->size !== 0) {
                $a = explode(".", $photo->name);
                $ext = end($a);

                // generate a unique file name
                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                $fileDir = '../../frontend/web/' . Yii::$app->params['urlNews'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }
                //
                $photo->saveAs($fileDir . $filename);
                chmod($fileDir . $filename, 0777);
                Image::thumbnail($fileDir . $filename, 120, 120)
                    ->save(Yii::getAlias($fileDir . "thumb_" . $filename), ['quality' => 80]);
                chmod($fileDir . "thumb_" . $filename, 0777);
                $utility = new UtilityComponent();
                $sizes = $utility->imageSizeRatio($fileDir . $filename, 500, 500);
                Image::getImagine()->open($fileDir . $filename)->thumbnail(new Box($sizes['width'], $sizes['height']))->save($fileDir . "mobile_" . $filename, ['quality' => 90]);
                chmod($fileDir . "mobile_" . $filename, 0777);
                //
//                $photo->saveAs($fileDir . $filename);
                $model->photo = $filename;
                $model->save();
//                return $this->redirect(['view', 'id' => $model->id]);
            }
            else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
            foreach ($images as $i => $image) {
                if ($image && $image->size !== 0) {
                    $a = explode(".", $image->name);
                    $ext = end($a);

                    // generate a unique file name
                    $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                    // the path to save file, you can set an uploadPath
                    // in Yii::$app->params (as used in example below)
                    $fileDir = '../../frontend/web/'. Yii::$app->params['urlNews'];
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
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $photos = Galery::find()->where(['childid'=>$id])->all();
        $old_photo = $model->photo;

        if ($model->load(Yii::$app->request->post())) {
            $photo = UploadedFile::getInstance($model, 'imageFile');
            $images = UploadedFile::getInstances($model, 'imageFiles');
            $model->date = date("Y-m-d H:i:s", strtotime($model->date));
            if ($photo && $photo->size !== 0) {
                $a = explode(".", $photo->name);
                $ext = end($a);

                // generate a unique file name
                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                $fileDir = '../../frontend/web/'. Yii::$app->params['urlNews'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }
                $photo->saveAs($fileDir . $filename);
                chmod($fileDir . $filename, 0777);
                Image::thumbnail($fileDir . $filename, 120, 120)
                    ->save(Yii::getAlias($fileDir . "thumb_" . $filename), ['quality' => 80]);
                chmod($fileDir . "thumb_" . $filename, 0777);
                $utility = new UtilityComponent();
                $sizes = $utility->imageSizeRatio($fileDir . $filename, 255, 255);
                Image::getImagine()->open($fileDir . $filename)->thumbnail(new Box($sizes['width'], $sizes['height']))->save($fileDir . "mobile_" . $filename, ['quality' => 90]);
                chmod($fileDir . "mobile_" . $filename, 0777);
                $model->photo = $filename;
            }
            else{
                $model->photo = $old_photo;
            }
            $model->save();
            foreach ($images as $i => $image) {
                if ($image && $image->size !== 0) {
                    $a = explode(".", $image->name);
                    $ext = end($a);

                    // generate a unique file name
                    $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");

                    // the path to save file, you can set an uploadPath
                    // in Yii::$app->params (as used in example below)
                    $fileDir = '../../frontend/web/'. Yii::$app->params['urlNews'];
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
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = News::findOne($id);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
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
