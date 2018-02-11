<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Info */

$this->title = 'Фонд тууралуу';
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Infos'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Өзгөртүү'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Өчүрүү'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'text_kg:ntext',
            'text_ru:ntext',
            'text_en:ntext',
        ],
    ]) ?>

</div>
