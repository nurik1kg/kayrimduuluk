<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reports */

$this->title = 'Отчёт';
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reports'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reports-view">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Өзгөртүү', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Өчүрүү', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Маалыматты так өчүрүүнү каалайсызбы?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date',
            'text_kg:ntext',
            'text_ru:ntext',
            'text_en:ntext',
        ],
    ]) ?>

</div>
