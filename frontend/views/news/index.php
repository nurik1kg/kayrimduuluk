<?php
/* @var $this yii\web\View */
?>
<div class="news-page">
    <div class="uk-width uk-container-center uk-text-center" style="max-width: 850px">
        <h1 class="info-title" style="display: inline-block"><?=Yii::t('app','fond_news');?></h1>
        <div class="uk-grid uk-grid-medium uk-margin-large-top" data-uk-scrollspy="{cls:'uk-animation-fade', target:'.fnews', delay:300, repeat: true}">
            <div class="uk-width-1-1 fnews">
                <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
                        <?php switch (Yii::$app->language){
                            case 'kg-KG':{
                                $gallery = \app\models\Galery::find()->where(['childid'=>$model->id])->all();
                                ?>
                                <h2 class="uk-margin-bottom-remove"><strong><?=$model->title_kg?></strong></h2>
                                <p class="uk-text-muted uk-margin-top-remove"><?=date('d.m.y',strtotime($model->date))?></p>
                                <img src="<?='/'.Yii::$app->params['urlNews'].$model->photo?>">
                                <p><?=$model->text_kg?></p>
                                <ul class="uk-grid uk-grid-small" data-uk-grid-margin>
                                    <?php foreach ($gallery as $item):?>
                                    <li class="uk-width-1-3"><img src="<?='/'.Yii::$app->params['urlNews'].$item->photo?>"></li>
                                    <?php endforeach;?>
                                </ul>
                                <?php
                                break;
                            }
                            case 'ru-RU' : {
                                $gallery = \app\models\Galery::find()->where(['childid'=>$model->id])->all();
                                ?>
                                <h2 class="uk-margin-bottom-remove"><strong><?=$model->title_ru?></strong></h2>
                                <p class="uk-text-muted uk-margin-top-remove"><?=date('d.m.y',strtotime($model->date))?></p>
                                <img src="<?='/'.Yii::$app->params['urlNews'].$model->photo?>">
                                <p><?=$model->text_ru?></p>
                                <ul class="uk-grid uk-grid-small" data-uk-grid-margin>
                                    <?php foreach ($gallery as $item):?>
                                        <li class="uk-width-1-3"><img src="<?='/'.Yii::$app->params['urlNews'].$item->photo?>"></li>
                                    <?php endforeach;?>
                                </ul>
                                <?php
                                break;
                            }
                            case 'en-EN':{
                                $gallery = \app\models\Galery::find()->where(['childid'=>$model->id])->all();
                                ?>
                                <h2 class="uk-margin-bottom-remove"><strong><?=$model->title_en?></strong></h2>
                                <p class="uk-text-muted uk-margin-top-remove"><?=date('d.m.y',strtotime($model->date))?></p>
                                <img src="<?='/'.Yii::$app->params['urlNews'].$model->photo?>">
                                <p><?=$model->text_en?></p>
                                <ul class="uk-grid uk-grid-small" data-uk-grid-margin>
                                    <?php foreach ($gallery as $item):?>
                                        <li class="uk-width-1-3"><img src="<?='/'.Yii::$app->params['urlNews'].$item->photo?>"></li>
                                    <?php endforeach;?>
                                </ul>
                                <?php
                                break;
                            }
                            default:{
                                $gallery = \app\models\Galery::find()->where(['childid'=>$model->id])->all();
                                ?>
                                <h2 class="uk-margin-bottom-remove"><strong><?=$model->title_kg?></strong></h2>
                                <p class="uk-text-muted uk-margin-top-remove"><?=date('d.m.y',strtotime($model->date))?></p>
                                <img src="<?='/'.Yii::$app->params['urlNews'].$model->photo?>">
                                <p><?=$model->text_kg?></p>
                                <ul class="uk-grid uk-grid-small" data-uk-grid-margin>
                                    <?php foreach ($gallery as $item):?>
                                        <li class="uk-width-1-3"><img src="<?='/'.Yii::$app->params['urlNews'].$item->photo?>"></li>
                                    <?php endforeach;?>
                                </ul>
                                <?php
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
