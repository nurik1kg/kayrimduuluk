<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мектептер';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schools-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Мектеп кошуу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary'=>false,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'image',
                'format'=>'raw',
                'contentOptions' => ['class' => 'timg' , 'style' => 'width:150px'],
                'value' => function ($data){
                    if(!empty($data->image) && !is_null($data->image) && $data->image != 'none')
                        $image = '/'.Yii::$app->params['urlSchool'].$data->image;//'/uploads/news/'.$photo->one()->url;
                    else
                        $image = '/uploads/nophoto.jpg';
                    return Html::img($image,['alt'=>Yii::t('app','image_alt'), 'style' => 'overflow:hidden;width:150px;height:150px;']);
                },
            ],
            'title_kg',
//            'title_ru',
//            'title_en',
            'text_kg:ntext',
            // 'text_ru:ntext',
            // 'text_en:ntext',
//             'phone',
            // 'address',
            // 'image',
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
