<?php

use app\models\Child;
use kartik\file\FileInput;
use kartik\select2\Select2;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sponsor */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <?php $form = ActiveForm::begin(['options' => [
        'enctype' => 'multipart/form-data','id'=>'dynamic-form']
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
                <h1>Камкорчунун анкетасы</h1>
                <?= $form->field($model, 'name')->textInput([
                    'maxlength' => true,
                    'placeholder' => 'Аты/жөнү'
                ])->label(false) ?>
            </div>
        </div>
        <?php DynamicFormWidget::begin([
            'widgetContainer' => 'dynamicform_wrapper',
            'widgetBody' => '.container-items',
            'widgetItem' => '.house-item',
//            'limit' => 25,
            'min' => 1,
            'insertButton' => '.add-house',
            'deleteButton' => '.remove-house',
            'model' => $model2[0],
            'formId' => 'dynamic-form',
            'formFields' => [
                'concernerid',
            ],
        ]); ?>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Балдар</th>
                <th class="text-center" style="width: 90px;">
                    <button type="button" class="add-house btn btn-success btn-xs"><span class="fa fa-plus"></span></button>
                </th>
            </tr>
            </thead>
            <tbody class="container-items">
            <?php foreach ($model2 as $indexTeam => $team_model): ?>
                <tr class="house-item">
                    <?php
                    // necessary for update action.
                    if (! $team_model->isNewRecord) {
                        echo Html::activeHiddenInput($team_model, "[{$indexTeam}]id");
                    }
                    ?>
                    <td class="col-lg-12">
                        <?=$form->field($team_model, "[{$indexTeam}]concernerid")->label(false)->widget(Select2::classname(), [
                            'data' => ArrayHelper::map(Child::find()->orFilterWhere(['help'=>0])->orFilterWhere(['concernerid'=>$model->id])->all(),'id','nameKg'),
                            'options' => [
//                            'id'=>'team_player',
//                            'value'=>$model->isNewRecord?'':Child::findOne(['concernerid'=>]),
                            'placeholder' =>'Тандаңыз...',
                            'required'=>true,
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]); ?>
                    </td>
                    <td class="text-center vcenter" style="width: 90px; verti">
                        <button type="button" class="remove-house btn btn-danger btn-xs"><span class="fa fa-minus"></span></button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php DynamicFormWidget::end(); ?>
        <?= Html::submitButton($model->isNewRecord ? ' Сактоо' : 'Өзгөртүү', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','style' => 'width:100%']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
