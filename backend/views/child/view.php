<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = $model->nameKg;
//$this->params['breadcrumbs'][] = ['label' => 'Children', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nameKg',
            'nameEn',
            'nameRu',
            'birthday',
//            'capacity:ntext',
//            'interest:ntext',
//            'future:ntext',
//            'sex',
//            'help',
//            'concernerid',
//            'created_at',
//            'photo1',
//            'photo2',
//            'photo3',
//            'photo4',
        ],
    ]) ?>

</div>
