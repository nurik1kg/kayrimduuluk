<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Galery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'childid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
