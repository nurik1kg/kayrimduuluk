<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Schools */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schools-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],]); ?>

    <?= $form->field($model, 'title_kg')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_kg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true,'placeholder'=>'+996 *** 00 00 00',]) ?>

    <?= $form->field($model, 'address_kg')->textInput(['maxlength' => true, 'placeholder'=>'Бишкек/к.Мира',]) ?>
    <?= $form->field($model, 'address_ru')->textInput(['maxlength' => true, 'placeholder'=>'Бишкек/пр.Мира',]) ?>
    <?= $form->field($model, 'address_en')->textInput(['maxlength' => true, 'placeholder'=>'Bishkek/Mira',]) ?>

    <?= $form->field($model, 'imageFile')->widget(FileInput::className(), [
        'language' => 'ru',
        'options' => [
            'multiple' => false,
            'accept' => 'image/*',
            'required' => $model->isNewRecord ? true:false,
        ],

        'pluginOptions' => [
            'initialPreview'=>$model->isNewRecord ? false : [
                ($model->image)?Html::img('/'.Yii::$app->params['urlSchool'].$model->image, ['class'=>'file-preview-image', 'alt'=>'The Moon', 'title'=>'The Moon', 'width'=>'250px',]):'',
            ],
            'showPreview' => true,
            'showCaption' => true,
            'previewFileType' => 'image',
            'elCaptionText' => '#customCaption'
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сактоо' : 'Өзгөртүүнү сактоо', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
