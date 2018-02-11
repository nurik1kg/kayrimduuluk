<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Камкорчулар';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <a class="btn pull-right btn-success" href="<?= \yii\helpers\Url::toRoute('consern/create')?>" style="margin-top: 33px;">
        <i class="fa fa-user-plus" aria-hidden="true" style="font-size: 20px;"></i> Камкорчу кошуу</a>
    <div class="col-md-12">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'name',
//            'photo',

            [
                'attribute' => '',
                'format'=>'raw',
                'contentOptions' => ['class' => 'timg' , 'style' => 'width:150px'],
                'value' => function ($data){
                    if(!empty($data->photo) && !is_null($data->photo) && strlen($data->photo) > 0 && $data->photo != 'none')
                        $image = '/'.Yii::$app->params['urlConsern'].$data->photo;//'/uploads/news/'.$photo->one()->url;
                    else
                        $image = '/uploads/nophoto.jpg';
                    return Html::img($image,['alt'=>Yii::t('app','image_alt').' '.$data->name, 'style' => 'overflow:hidden;width:150px;height:150px;']);
                },
            ],
            [
                'attribute' => 'name',
                'contentOptions' => ['class' => 'col-lg-8'],
            ],
            'count',
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

//            ['class' => 'yii\grid\ActionColumn'],
        ],
        'tableOptions' =>['class' => 'table'],

    ]); ?>
</div>
