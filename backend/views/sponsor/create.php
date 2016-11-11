<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sponsor */

$this->title = 'Create Sponsor';
//$this->params['breadcrumbs'][] = ['label' => 'Sponsors', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


