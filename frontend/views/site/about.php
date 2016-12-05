<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app','about');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-page">
    <div class="uk-width uk-container-center" style="max-width: 850px">
        <div class="uk-text-center"><h1 class="info-title" style="display: inline-block"><?= Yii::t('app','title_info')?></h1></div>
        <div class="uk-panel uk-panel-box uk-margin-top">
            <div class="uk-grid uk-grid-medium">
                <?php
                $model = \app\models\Info::findOne(1);
                switch (Yii::$app->language){
                    case 'kg-KG': {
                        echo $model->text_kg;
                        break;
                    }
                    case 'ru-RU': {
                        echo $model->text_ru;
                        break;
                    }
                    case 'en-EN': {
                        echo $model->text_en;
                        break;
                    }
                    default: {
                        echo $model->text_kg;
                        break;
                    }
                } ?>
            </div>



            <!-- -->
        </div>

<div class="uk-grid uk-grid-medium uk-margin-large-top" data-uk-scrollspy="{cls:'uk-animation-fade', target:'.fnews', delay:300, repeat: true}">
    <?php foreach ($schools as $school):?>
    <div class="uk-width-1-4 fnews">
        <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
            <div class="uk-panel-teaser">
                <img src="<?='/'.Yii::$app->params['urlSchool'].$school->image?>">
            </div>
            <?php switch (Yii::$app->language):
                case 'kg-KG':{?>
            <h3 class="uk-margin-bottom-remove"><strong><?=$school->title_kg?></strong></h3>
            <p><?=$school->text_kg?></p>
            <p><span class="uk-icon uk-icon-phone-square"><?=' '.$school->phone?></p>
            <p><span class="uk-icon uk-icon-map-marker"></span><?=' '.$school->address_kg?></p>
            <?php break;}
            case 'ru-RU':{?>
            <h3 class="uk-margin-bottom-remove"><strong><?=$school->title_ru?></strong></h3>
            <p><?=$school->text_ru?></p>
            <p><span class="uk-icon uk-icon-phone-square"><?=' '.$school->phone?></p>
            <p><span class="uk-icon uk-icon-map-marker"></span><?=' '.$school->address_ru?></p>
            <?php break;}
            case 'en-EN':{?>
            <h3 class="uk-margin-bottom-remove"><strong><?=$school->title_en?></strong></h3>
            <p><?=$school->text_en?></p>
            <p><span class="uk-icon uk-icon-phone-square"><?=' '.$school->phone?></p>
            <p><span class="uk-icon uk-icon-map-marker"></span><?=' '.$school->address_en?></p>
            <?php break;}
            default:{?>
            <h3 class="uk-margin-bottom-remove"><strong><?=$school->title_kg?></strong></h3>
            <p><?=$school->text_kg?></p>
            <p><span class="uk-icon uk-icon-phone-square"><?=' '.$school->phone?></p>
            <p><span class="uk-icon uk-icon-map-marker"></span><?=' '.$school->address_kg?></p>
            <?php } endswitch;?>
        </div>
    </div>
    <?php endforeach;?>
</div>

<div class="uk-text-center"><h2 class="info-title" style="display: inline-block; margin-bottom: 20px;"><?=Yii::t('app','reports')?></h2></div>

<div class="uk-accordion" data-uk-accordion="{showfirst: false}">
    <?php foreach ($reports as $report): ?>
    <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-border-rounded uk-margin-bottom">
        <h3 class="uk-accordion-title" style="margin: -15px 0; padding: 15px 0; cursor: pointer;"><span class="uk-icon uk-icon-calendar"></span> <strong><?=Yii::t('app','{y} year! ',['y'=>date('Y',strtotime($report->date))])?></strong><?= Yii::t('app', date('m',strtotime($report->date)).'m')?></h3>

        <div class="uk-accordion-content">
            <p class="uk-margin-top">
                <?php
                switch (Yii::$app->language){
                    case 'kg-KG':{
                        echo $report->text_kg;
                        break;
                    }
                    case 'ru-RU':{
                        echo $report->text_ru;
                        break;
                    }
                    case 'en-EN':{
                        echo $report->text_en;
                        break;
                    }
                    default:{
                        echo $report->text_kg;
                    }
                } ?>
            </p>

            <div class="uk-grid uk-grid-small uk-grid-width-medium-1-3" data-uk-grid-margin>
                <?php
                $images = \app\models\Galery::find()->where(['reportsid'=>$report->id])->all();
                foreach ($images as $image) :
                ?>
                <div>
                    <a href="<?='/'.Yii::$app->params['urlReports'].$image->photo?>"  data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
                        <img src="<?='/'.Yii::$app->params['urlReports'].$image->photo?>" width="800" height="600" alt="">
                    </a>
                </div>
<!--                <div>-->
<!--                    <a href="img/report/8.jpg" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">-->
<!--                        <img src="img/placeholder_800x600_1.jpg" width="800" height="600" alt="">-->
<!--                    </a>-->
<!--                </div>-->
                <?php endforeach;?>
            </div>

        </div>
    </div>
    <?php endforeach;?>
</div>
</div>
</div>