<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Concern */

$this->title = 'Update Concern: ' . $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Concerns', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>

    <?= $this->render('_form', [
        'model' => $model,
        'model2' => $model2,
    ]) ?>

