<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фонд тууралуу';
//$this->params['breadcrumbs'][] = $this->title;
$model = \app\models\Info::findOne(1);
?>
<div class="row">
    <div class="container">
        <div class="col-lg-10"></div>
        <div class="col-lg-2"><?= Html::a('Өзгөртүү', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?></div>
        <div class="col-lg-12" style="margin-top: 20px">
            <h2><b>Кыгызча</b></h2>
            <?=$model->text_kg?>
        </div>
        <div class="col-lg-12" style="margin-top: 20px">
            <h2><b>Орусча</b></h2>
            <?=$model->text_ru?>
        </div>
        <div class="col-lg-12" style="margin-top: 20px">
            <h2><b>Англистче</b></h2>
            <?=$model->text_en?>
        </div>
    </div>
</div>
