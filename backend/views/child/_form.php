<?php

use app\models\Galery;
use common\components\DbHelperComponents;
use kartik\checkbox\CheckboxX;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Child */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<div class="row">
    <div class="col-md-5">
        <?= $form->field($model, 'imageFiles[]')->widget(FileInput::className(), [
            'language' => 'ru',
            'options' => [
                'multiple' => true,
                'accept' => 'image/*',
//                'required' => $model->isNewRecord ? true:false,
            ],

            'pluginOptions' => [
                    'initialPreview'=>$model->isNewRecord ? false : false,
                'initialPreviewAsData'=>true,
                'showPreview' => true,
                'showCaption' => true,
                'showRemove' => false,
                'showUpload' => false,
                'previewFileType' => 'image',
                'uploadUrl' => Url::to(['/site/file-upload']),
//                'removeUrl' => Url::to(['/site/file-remove']),
                'maxFileCount' => 4
            ]
        ])->label(false) ?>
    </div>
    <div class="col-md-5" style="margin-bottom: 30px;">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Кыргызча</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Русский</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">English</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <h1>Баланын анкетасы</h1>
                <?= $form->field($model, 'nameKg')->textInput(['placeholder'=>'Аты/жөнү'])->label(false) ?>
                <?= $form->field($model, 'capacityKg')->textarea(['rows' => 4,'placeholder'=>'Баланын жөндөмү'])->label(false) ?>
                <?= $form->field($model, 'interestKg')->textarea(['rows' => 4,'placeholder'=>'Эмнеге кызыгат'])->label(false) ?>
                <?= $form->field($model, 'futureKg')->textarea(['rows' => 4,'placeholder'=>'Келечекте эмне кылгысы келет'])->label(false) ?>
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
                ])->label(false);?>
                <?php
                echo $form->field($model, 'sex')->radioList((new DbHelperComponents())->getPols(), [
                    'item' => function($index, $label, $name, $checked, $value) {
                        $return = '<div class="radio-inline">';
                        $return .= '<label>';
                        if ($checked)
                            $return .= '<input type="radio" name="' . $name . '" value="'. $value .'"'.' checked>';
                        else
                            $return .= '<input type="radio" name="' . $name . '" value="'. $value .' ">';
                        $return .= '<span style="font-weight: 500">' . ucwords($label) . '</span>';
                        $return .= '</label>';
                        $return .= '</div>';
                        return $return;
                    },
                ])->label ($label = false);
                ?>
                <?= $form->field($model, 'help')->dropDownList((new DbHelperComponents)->getStatusHelps(),['prompt'=>Yii::t('app', 'Тандаңыз...')])->label(false) ?>

                <?= Html::submitButton($model->isNewRecord ? 'Сактоо' : 'Өзгөртүү', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style'=>'width:100%']) ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <h1>Анкета ребенка</h1>
                <?= $form->field($model, 'nameRu')->textInput(['placeholder'=>'Ф.И.О'])->label(false) ?>
                <?= $form->field($model, 'capacityKg')->textarea(['rows' => 4,'placeholder'=>'Навык и способность ребенка'])->label(false) ?>
                <?= $form->field($model, 'interestKg')->textarea(['rows' => 4,'placeholder'=>'Интересы ребенка'])->label(false) ?>
                <?= $form->field($model, 'futureKg')->textarea(['rows' => 4,'placeholder'=>'Чем хочеть заняться ребенок в будущем'])->label(false) ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                <h1>Profile</h1>
                <?= $form->field($model, 'nameEn')->textInput(['placeholder'=>'Name'])->label(false) ?>
                <?= $form->field($model, 'capacityEn')->textarea(['rows' => 4,'placeholder'=>'Skill and ability'])->label(false) ?>
                <?= $form->field($model, 'interestEn')->textarea(['rows' => 4,'placeholder'=>'interests'])->label(false) ?>
                <?= $form->field($model, 'futureEn')->textarea(['rows' => 4,'placeholder'=>'The child wants to do in the future'])->label(false) ?>
            </div>
        </div>
</div>
    <div class="col-md-2">
        <div class="circle" title="Жардам ала элек"></div>
    </div>
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
                            return '/' . Yii::$app->params['urlChild']. $data->photo; // $data['name'] for array data, e.g. using SqlDataProvider.
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
                                $customurl = Yii::$app->getUrlManager()->createUrl(['child/photodelete', 'id' => $modell['id']]); //$model->id для AR
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

