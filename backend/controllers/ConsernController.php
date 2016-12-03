<?php

namespace backend\controllers;

use app\models\Child;
use Yii;
use app\models\Concern;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ConsernController implements the CRUD actions for Concern model.
 */
class ConsernController extends Controller
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
     * Lists all Concern models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Concern::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Concern model.
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
     * Creates a new Concern model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Concern();
        $model2 = [new Child()];

        if ($model->load(Yii::$app->request->post())) {
//            return print_r($_POST);
            $image = UploadedFile::getInstance($model, 'imageFile');
            $childs = $_POST['Child'];
            if ($image && ($image->size !== 0)) {
                $a = explode(".", $image->name);
                $ext = end($a);

                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");
                $fileDir = '../../frontend/web/' . Yii::$app->params['urlConsern'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }

                $image->saveAs($fileDir . $filename);
                chmod($fileDir . $filename, 0777);

                $model->photo = $filename;
            }
            else{
                $model->photo = 'none';
            }
            if ($model->save()){
                $count = 0;
                foreach ($childs as $i=>$child){
                    $modelChild = Child::findOne($child['nameKg']);
                    $modelChild->concernerid = $model->id;
                    $modelChild->help = 1;
                    $modelChild->save();
                }
                if(count(Child::find()->where(['concernerid'=>$model->id])->all())>0)
                    $count = count(Child::find()->where(['concernerid'=>$model->id])->all());
                $model->count = $count;
                $model->save();
                return $this->redirect(['index']);
            }
            else {
                return $this->render('create', [
                    'model' => $model,
                    'model2' =>$model2,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'model2' =>$model2,
            ]);
        }
    }

    /**
     * Updates an existing Concern model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = Child::find()->orFilterWhere(['concernerid'=>$id])->orFilterWhere(['help'=>0])->all();

        if ($model->load(Yii::$app->request->post())){
            $image = UploadedFile::getInstance($model, 'imageFile');
            $childs = $_POST['Child'];

            if ($image && ($image->size !== 0)) {
                $a = explode(".", $image->name);
                $ext = end($a);

                $filename = Yii::$app->security->generateRandomString() . strtolower(".{$ext}");
                $fileDir = '../../frontend/web/' . Yii::$app->params['urlConsern'];
                if (!is_dir($fileDir)) {
                    @mkdir($fileDir, 0777, true);
                    @chmod('uploads', 0777);
                    @chmod($fileDir, 0777);
                }

                $image->saveAs($fileDir . $filename);
                chmod($fileDir . $filename, 0777);

                $model->photo = $filename;
            }
            else {
                $model->photo = 'none';
            }
            if ($model->save()){
                $count = 0;
                $mods = Child::find()->where(['concernerid'=>$id])->all();
                foreach ($mods as $mod) {
                    $mod->concernerid = 0;
                    $mod->help = 0;
                    $mod->save();
                }
                foreach ($childs as $i=>$child){
                    $modelChild = Child::findOne($child['concernerid']);
                    $modelChild->concernerid = $model->id;
                    $modelChild->help = 1;
                    $modelChild->save();
                }
                if(count(Child::find()->where(['concernerid'=>$model->id])->all())>0)
                    $count = count(Child::find()->where(['concernerid'=>$model->id])->all());
                $model->count = $count;
                $model->save();
                return $this->redirect(['index']);
            }
            else {
                return $this->render('update', [
                    'model' => $model,
                    'model2'=>$model2,
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'model2'=>$model2,
            ]);
        }
    }

    /**
     * Deletes an existing Concern model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = Child::find()->where(['concernerid'=>$id])->all();
        if(count($model)>0){
            foreach ($model as $mod){
                $mod->concernerid = 0;
                $mod->save();
            }
        }
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Concern model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Concern the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Concern::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
