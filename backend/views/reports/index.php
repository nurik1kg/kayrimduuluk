<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отчёттор';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reports-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Отчёт киргизүү', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'text_kg:ntext',
//            'date',
            [
                'attribute' =>  'date',
                'format' => ['date'],
                'headerOptions' => ['class' => 'col-lg-2 col-md-2'],
                'contentOptions' => ['class' => 'tpsmall'],
            ],
//            'text_ru:ntext',
//            'text_en:ntext',
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
