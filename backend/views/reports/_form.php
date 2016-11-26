<?php

use app\models\Galery;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reports-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],]); ?>

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
        'language' => 'ru'
    ]);?>

    <?= $form->field($model, 'text_kg')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]); ?>

    <?= $form->field($model, 'text_ru')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]); ?>

    <?= $form->field($model, 'text_en')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]); ?>

    <?= $form->field($model, 'imageFiles[]')->widget(FileInput::classname(), [
        'language' => 'ru',
        'options' => [
            'multiple' => true,
            'accept' => 'image/*'
        ],
        'pluginOptions' => [
            'previewFileType' => 'image',
            'showRemove' => true,
            'showUpload' => false,
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сактоо' : 'Өзгөртүү', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php
    $query = Galery::find()->where(['childid' => $model->id]);
    if(!$model->isNewRecord && $query->count()>0) {

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        if($query->count()>0) {
            ?>
            <div class="col-lg-12">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    //'filterModel' => $searchModel,
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn',
                            'contentOptions' => ['style' => 'width: 30px;']
                        ],
                        [
                            'attribute' => 'Фото',
                            'value' => function ($data) {
                                return '/' . Yii::$app->params['urlReports']. $data->photo; // $data['name'] for array data, e.g. using SqlDataProvider.
                            },
                            'format' => ['image', ['height' => '100']],
                        ],
                        //'description:ntext',

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'contentOptions' => ['style' => 'width: 100px;'],
                            'buttons' => [
                                'headerOptions' => ['width' => '50'],
                                'view' => function ($url, $modell) {
                                    $customurl = Yii::$app->getUrlManager()->createUrl(['galery/view', 'id' => $modell['id']]); //$model->id для AR
                                    return \yii\helpers\Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $customurl,
                                        ['title' => Yii::t('yii', 'View'), 'data-pjax' => '0']);
                                },
                                'delete' => function ($url, $modell) {
                                    $customurl = Yii::$app->getUrlManager()->createUrl(['reports/photodelete', 'id' => $modell['id']]); //$model->id для AR
                                    return \yii\helpers\Html::a('<span class="glyphicon glyphicon-trash"></span> ' . "Удалить", $customurl,
                                        ['class' => 'btn btn-danger', 'title' => Yii::t('yii', 'Delete')/*, 'data-pjax' => '0'*/, 'data-method'=>'post']);
                                }
                            ],
                            'template' => ' {delete}',
                        ],
                    ],
                ]); ?>
            </div>
            <?php
        }
    }
    ?>
</div>
