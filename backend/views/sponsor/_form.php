<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sponsor */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
        <?php $form = ActiveForm::begin(['options' => [
            'enctype' => 'multipart/form-data']
            ,]); ?>
    <div class="col-md-5">
        <?= $form->field($model, 'imageFile')->widget(FileInput::className(), [
            'language' => 'ru',
            'options' => [
                'multiple' => false,
                'accept' => 'image/*',
//                'required' => $model->isNewRecord ? true:false,
            ],

            'pluginOptions' => [
                'initialPreview'=>$model->isNewRecord ? false :
                    '/'.Yii::$app->params['urlSponsor'].$model->photo,
                    'initialPreviewAsData'=>true,
                    'showPreview' => true,
                    'showCaption' => true,
                    'showRemove' => false,
                    'showUpload' => false,
                    'previewFileType' => 'image',
                    'uploadUrl' => Url::to(['/site/file-upload']),
            ]
        ])->label(false) ?>
    </div>
    <div class="col-md-7" style="margin-bottom: 30px;">
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <h1>Өнөктөштүн анкетасы</h1>
                    <?= $form->field($model, 'name')->textInput([
                        'maxlength' => true,
                        'placeholder' => 'Аты/жөнү'
                    ])->label(false) ?>
                <?= Html::submitButton($model->isNewRecord ? ' Сактоо' : 'Өзгөртүү', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','style' => 'width:100%']) ?>
            </div>
        </div>
    </div>
        <?php ActiveForm::end(); ?>
</div>
