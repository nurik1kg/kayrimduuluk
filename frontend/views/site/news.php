<?php
use yii\widgets\LinkPager;

$this->title = Yii::t('app','news');
?>
<div class="news-page">
    <div class="uk-width uk-container-center uk-text-center" style="max-width: 850px">
        <h1 class="info-title" style="display: inline-block"><?=Yii::t('app','news_of')?></h1>
        <div class="uk-grid uk-grid-medium uk-grid-match uk-margin-large-top" data-uk-scrollspy="{cls:'uk-animation-fade', target:'.fnews', delay:300, repeat: true}">

            <?php switch (Yii::$app->language){
                case 'kg-KG':{
                    foreach ($news as $new){
                        if(strlen($new->text_kg)>= 100)
                            $mini_text = substr($new->text_kg,0,100);
                        else
                            $mini_text = substr($new->text_kg,0,strlen($new->text_kg));
                        ?>
                        <div class="uk-width-1-2 fnews">
                            <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
                                <div class="uk-panel-teaser">
                                    <img src="<?='/'.Yii::$app->params['urlNews'].$new->photo?>">
                                </div>
                                <h3 class="uk-margin-bottom-remove"><strong><?=$new->title_kg?></strong></h3>
                                <p class="uk-text-muted uk-margin-top-remove"><?=date("d.m.y",strtotime($new->date))?></p>
                                <p class="uk-margin-bottom"><?=$mini_text?></p>
                                <a href="<?=\yii\helpers\Url::toRoute(['news/info','id'=>$new->id])?>" class="uk-button uk-button-primary uk-border-rounded"><?=Yii::t('app','more_info_news')?></a>
                            </div>
                        </div>
                        <?php
                    }
                    break;
                }
                case 'ru-RU':{
                    foreach ($news as $new){
                        if(strlen($new->text_ru)>= 100)
                            $mini_text = substr($new->text_ru,0,100);
                        else
                            $mini_text = substr($new->text_ru,0,strlen($new->text_ru));
                        ?>
                        <div class="uk-width-1-2 fnews">
                            <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
                                <div class="uk-panel-teaser">
                                    <img src="<?='/'.Yii::$app->params['urlNews'].$new->photo?>">
                                </div>
                                <h3 class="uk-margin-bottom-remove"><strong><?=$new->title_ru?></strong></h3>
                                <p class="uk-text-muted uk-margin-top-remove"><?=date("d.m.y",strtotime($new->date))?></p>
                                <p class="uk-margin-bottom"><?=$mini_text?></p>
                                <a href="<?=\yii\helpers\Url::toRoute(['news/info','id'=>$new->id])?>" class="uk-button uk-button-primary uk-border-rounded"><?=Yii::t('app','more_info_news')?></a>
                            </div>
                        </div>
                        <?php
                    }
                    break;
                }
                case 'en-EN':{
                    foreach ($news as $new){
                        if(strlen($new->text_en)>= 100)
                            $mini_text = substr($new->text_en,0,100);
                        else
                            $mini_text = substr($new->text_en,0,strlen($new->text_en));
                        ?>
                        <div class="uk-width-1-2 fnews">
                            <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
                                <div class="uk-panel-teaser">
                                    <img src="<?='/'.Yii::$app->params['urlNews'].$new->photo?>">
                                </div>
                                <h3 class="uk-margin-bottom-remove"><strong><?=$new->title_en?></strong></h3>
                                <p class="uk-text-muted uk-margin-top-remove"><?=date("d.m.y",strtotime($new->date))?></p>
                                <p class="uk-margin-bottom"><?=$mini_text?></p>
                                <a href="<?=\yii\helpers\Url::toRoute(['news/info','id'=>$new->id])?>" class="uk-button uk-button-primary uk-border-rounded"><?=Yii::t('app','more_info_news')?></a>
                            </div>
                        </div>
                        <?php
                    }
                    break;
                }
                default : {
                    foreach ($news as $new){
                        if(strlen($new->text_kg)>= 100)
                            $mini_text = substr($new->text_kg,0,100);
                        else
                            $mini_text = substr($new->text_kg,0,strlen($new->text_kg));
                        ?>
                        <div class="uk-width-1-2 fnews">
                            <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
                                <div class="uk-panel-teaser">
                                    <img src="<?='/'.Yii::$app->params['urlNews'].$new->photo?>">
                                </div>
                                <h3 class="uk-margin-bottom-remove"><strong><?=$new->title_kg?></strong></h3>
                                <p class="uk-text-muted uk-margin-top-remove"><?=date("d.m.y",strtotime($new->date))?></p>
                                <p class="uk-margin-bottom"><?=$mini_text?></p>
                                <a href="<?=\yii\helpers\Url::toRoute(['news/info','id'=>$new->id])?>" class="uk-button uk-button-primary uk-border-rounded"><?=Yii::t('app','more_info_news')?></a>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
    <?= LinkPager::widget([
        'pagination' => $pagination,
        'options'=>['class'=>'uk-pagination'],
        'activePageCssClass' => ['class' => 'uk-active', 'style'=>'text'],
    ]) ?>
</div>
