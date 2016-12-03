<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Балдар';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <a class="btn pull-right btn-success" href="<?=Url::toRoute('child/create'); ?>" style="margin-top: 33px;">
        <i class="fa fa-user-plus" aria-hidden="true" style="font-size: 20px;"></i> Бала кошуу</a>
    <fieldset class="form-group">
        <form>
            <p><label class="col-md-12" for="selectNews"> Балдарды издөө</label></p>
            <div class="col-md-9">
                <div class="input-group">
                    <input name="search_text" type="text" class="form-control" placeholder="издөө">
                    <span class="input-group-btn">
			            <button class="btn btn-search" type="submit"><span class="fa fa-search search-icon"></span> Табуу</button>
			            </span>
                </div>
            </div>
        </form>
    </fieldset>
</div>


<div class="row">
    <div class="col-md-12">

        <h4 style="display: inline-block; margin-right: 10px;">Бардык балдардын саны</h4>
        <a href="#!" class="btn btn-default">Кыздар 100</a>
        <a href="#!" class="btn btn-default">Балдар 200</a>
        <br><br>
        <?= GridView::widget([
            'summary' => "Балдардын саны: {totalCount}",
            'dataProvider' => $dataProvider,
                'columns' => [
//                    ['class' => 'yii\grid\SerialColumn'],

                    [
                        'attribute' => '',
                        'format'=>'raw',
                        'headerOptions' => ['class'=>'col-lg-2 col-md-2'],
                        'contentOptions' => ['class' => 'timg'],
                        'value' => function ($data){
                            $photo = \app\models\Galery::find()->where(['childid'=>$data->id])->one();
                            if($photo != null)
                                $image = '/'.Yii::$app->params['urlChild'].$photo->photo;
                            else
                                $image = "/uploads/nophoto.jpg";
                            return Html::img($image,['alt'=>Yii::t('app','image_alt'), 'style'=>'width:150px']);
                        },
                    ],
//                    'id',
//                    'nameKg',
                    [
                        'attribute'=>'nameKg',
                        'contentOptions' => ['class' => 'col-lg-8'],

                    ],
//                    'birthday',
//                    'capacity:ntext',
//                    'interest:ntext',
                    // 'future:ntext',
//                     'sex',
                     'help',
//                     'concernerid',
//                     'created_at',
//                     'photo1',
//                     'photo2',
//                     'photo3',
//                     'photo4',

//                    ['class' => 'yii\grid\ActionColumn'],

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{update}',
                        'buttons' => [
                            'update' => function ($url,$model) {
                                return Html::a(
                                    '<span class="glyphicon glyphicon-pencil"></span>',
                                    $url,['class' => 'btn btn-success']);
                            }
                        ],

                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{delete}',
                        'buttons' => [
                            'delete' => function ($url,$model) {
                                return Html::a(
                                    '<span class="glyphicon glyphicon-remove-circle"></span>',
                                    $url, [ 'data' => [
                                    'class' => '',
                                    'confirm' => 'Вы действительно хотите удалить?',
                                    'method' => 'post',
                                ], 'class' => 'btn btn-danger',
                                ]);
                            }
                        ],

                    ],
                ],
            'tableOptions' =>['class' => 'table table-hover'],
        ]); ?>

    </div>
</div>
