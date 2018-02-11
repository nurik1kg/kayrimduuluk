<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Жаңылыктар';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <p>Жаңылыктар</p>
        <a class="btn btn-add pull-right btn-success" href="<?=\yii\helpers\Url::toRoute('news/create')?>"><span class="fa fa-plus"> Жаңылык кошуу</span></a>
        <fieldset class="form-group">
            <form method="get">
                <p><label class="col-md-12">Жаңылыктардан издөө</label></p>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control" placeholder="ведите запрос" value="<?=$var?>">
                        <span class="input-group-btn">
                      <button class="btn btn-search" type="submit">
                      <span class="fa fa-search search-icon"></span>Табуу</button>
                      </span>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
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
                        $image = '/'.Yii::$app->params['urlNews'].$data->photo;//'/uploads/news/'.$photo->one()->url;
                    else
                        $image = '/uploads/nophoto.jpg';
                    return Html::img($image,['alt'=>Yii::t('app','image_alt'), 'style' => 'overflow:hidden;width:150px;height:150px;']);
                },
            ],
            [
                'attribute' => 'title_kg',
                'contentOptions' => ['class' => 'col-lg-8'],
            ],
            'date',
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