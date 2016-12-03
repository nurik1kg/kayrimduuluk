<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Statistic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statistic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'helped')->textInput() ?>

    <?= $form->field($model, 'help')->textInput() ?>

    <?= $form->field($model, 'date')->widget(DatePicker::className(),[
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'value' => date("d.m.Y"),
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'dd.mm.yyyy',
        ],
        'removeButton' => [
            'class'=>'btn btn-danger',
        ],
        'pickerButton' => [
            'class'=>'btn btn-info',
        ],
        'options' => [
            'placeholder'=>'Туулган жылы',
        ],
        'language' => 'ru'
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Өзгөртүү', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
