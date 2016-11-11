<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sponsor */

$this->title = 'Update Sponsor: ' . $model->name;

?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


