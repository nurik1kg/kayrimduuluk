<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\People */

$this->title = 'Анкета';
//$this->params['breadcrumbs'][] = ['label' => 'Peoples', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="people-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Өзгөртүү', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Өчүрүү', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_kg',
            'name_ru',
            'name_en',
            'birthday',
            'content_kg:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'logo',
            'image',
        ],
    ]) ?>

</div>
