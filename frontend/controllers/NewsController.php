<?php

namespace frontend\controllers;

use app\models\News;

class NewsController extends \yii\web\Controller
{
    public function actionInfo($id)
    {
        $model = News::findOne($id);
        return $this->render('index',[
            'model' => $model,
        ]);
    }

}
