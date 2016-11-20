<?php

use app\models\Galery;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],]); ?>

    <div class="col-lg-9">
        <?= $form->field($model, 'title_kg')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'text_kg')->textarea(['rows' => 10]);?>

        <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'text_ru')->textarea(['rows' => 10]);?>

        <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'text_en')->textarea(['rows' => 10]);?>

        <?= $form->field($model, 'imageFile')->widget(FileInput::className(), [
            'language' => 'ru',
            'options' => [
                'multiple' => false,
                'accept' => 'image/*',
                'required' => $model->isNewRecord ? true:false,
            ],

            'pluginOptions' => [
                'initialPreview'=>$model->isNewRecord ? false : [
                    ($model->photo)?Html::img('/'.Yii::$app->params['urlNews'].$model->photo, ['class'=>'file-preview-image', 'alt'=>'The Moon', 'title'=>'The Moon', 'width'=>'250px',]):'',
                ],
                'showPreview' => true,
                'showCaption' => false,
                'previewFileType' => 'image',
                //'elCaptionText' => '#customCaption'
            ]
        ]);?>
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
    </div>
    <div class="col-lg-3">
        <br>
            <?= Html::submitButton($model->isNewRecord ? 'Кошуу' : 'Жаңылоо', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <br><br>
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
            <?php
            //Pjax::begin(); ?>
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
                            return '/' . Yii::$app->params['urlNews']. $data->photo; // $data['name'] for array data, e.g. using SqlDataProvider.
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
                                $customurl = Yii::$app->getUrlManager()->createUrl(['news/photodelete', 'id' => $modell['id']]); //$model->id для AR
                                return \yii\helpers\Html::a('<span class="glyphicon glyphicon-trash"></span> ' . "Удалить", $customurl,
                                    ['class' => 'btn btn-danger', 'title' => Yii::t('yii', 'Delete')/*, 'data-pjax' => '0'*/, 'data-method'=>'post']);
                            }
                        ],
                        'template' => ' {delete}',
                    ],
                ],
            ]); ?>
            <?php
            //Pjax::end();
            ?>
        </div>
        <?php
    }
}
?>
