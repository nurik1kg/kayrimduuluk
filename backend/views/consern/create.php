<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Concern */

$this->title = 'Create Concern';
//$this->params['breadcrumbs'][] = ['label' => 'Concerns', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>


    <?= $this->render('_form', [
        'model' => $model,
        'model2'=> $model2,
    ]) ?>


