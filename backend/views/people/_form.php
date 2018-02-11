<?php

use kartik\date\DatePicker;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\People */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],]); ?>

    <div class="col-lg-9">

    <?= $form->field($model, 'name_kg')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'content_kg')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]); ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'content_ru')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]); ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'content_en')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]); ?>

    <?= $form->field($model, 'imageFile1')->widget(FileInput::className(), [
        'language' => 'ru',
        'options' => [
            'multiple' => false,
            'accept' => 'image/*',
            'required' => $model->isNewRecord ? true:false,
        ],

        'pluginOptions' => [
            'initialPreview'=>$model->isNewRecord ? false : [
                ($model->logo)?Html::img('/'.Yii::$app->params['urlPeople'].$model->logo, ['class'=>'file-preview-image', 'alt'=>'The Moon', 'title'=>'The Moon' , 'width'=>'250px',]):'',
            ],
            'showPreview' => true,
            'showCaption' => false,
            'previewFileType' => 'image',
            //'elCaptionText' => '#customCaption'
        ]
    ]);?>

    <?= $form->field($model, 'imageFile2')->widget(FileInput::className(), [
        'language' => 'ru',
        'options' => [
            'multiple' => false,
            'accept' => 'image/*',
            'required' => $model->isNewRecord ? true:false,
        ],

        'pluginOptions' => [
            'initialPreview'=>$model->isNewRecord ? false : [
                ($model->image)?Html::img('/'.Yii::$app->params['urlPeople'].$model->image, ['class'=>'file-preview-image', 'alt'=>'The Moon', 'title'=>'The Moon', 'width'=>'250px',]):'',
            ],
            'showPreview' => true,
            'showCaption' => false,
            'previewFileType' => 'image',
            //'elCaptionText' => '#customCaption'
        ]
    ]);?>

    </div>
    <div class="col-lg-3">
    <?= Html::submitButton($model->isNewRecord ? 'Сактоо' : 'Өзгөртүп сактоо', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <br><br>
    <?= $form->field($model, 'birthday')->widget(DatePicker::className(),[
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
    </div>
    <?php ActiveForm::end(); ?>
