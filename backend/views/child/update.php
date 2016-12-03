<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = 'Обновить: ' . $model->nameKg;
//$this->params['breadcrumbs'][] = ['label' => 'Children', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="child-update">

    <?= $this->render('_form', [
        'model' => $model,
        'photos' => $photos,
    ]) ?>

</div>
