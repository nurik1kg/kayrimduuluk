<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app','about');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-page">
    <div class="uk-width uk-container-center" style="max-width: 850px">
        <div class="uk-text-center"><h1 class="info-title" style="display: inline-block">Фонд тууралуу</h1></div>
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
                    case 'en-US': {
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
    <div class="uk-width-1-4 fnews">
        <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
            <div class="uk-panel-teaser">
                <img src="img/news/news1.png">
            </div>
            <h3 class="uk-margin-bottom-remove"><strong>Мектеп интернат аты</strong></h3>
            <p>"Билал Кидс" соода маркасы мектеп интернатынын окуучуларын 350 жаңы баш кийимдер менен кубантышты. </p>
            <p><span class="uk-icon uk-icon-phone-square"> +996 000 000</p>
            <p><span class="uk-icon uk-icon-map-marker"></span> адресс</p>
        </div>
    </div>
    <div class="uk-width-1-4 fnews">
        <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
            <div class="uk-panel-teaser">
                <img src="img/news/news2.png">
            </div>
            <h3 class="uk-margin-bottom-remove"><strong>Мектеп интернат аты</strong></h3>
            <p>"Билал Кидс" соода маркасы мектеп интернатынын окуучуларын 350 жаңы баш кийимдер менен кубантышты. </p>
            <p><span class="uk-icon uk-icon-phone-square"> +996 000 000</p>
            <p><span class="uk-icon uk-icon-map-marker"></span> адресс</p>
        </div>
    </div>
    <div class="uk-width-1-4 fnews">
        <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
            <div class="uk-panel-teaser">
                <img src="img/news/news.png">
            </div>
            <h3 class="uk-margin-bottom-remove"><strong>Мектеп интернат аты</strong></h3>
            <p>"Билал Кидс" соода маркасы мектеп интернатынын окуучуларын 350 жаңы баш кийимдер менен кубантышты. </p>
            <p><span class="uk-icon uk-icon-phone-square"> +996 000 000</p>
            <p><span class="uk-icon uk-icon-map-marker"></span> адресс</p>
        </div>
    </div>
    <div class="uk-width-1-4 fnews">
        <div class="uk-panel uk-panel-box uk-margin-medium-bottom">
            <div class="uk-panel-teaser">
                <img src="img/news/news1.png">
            </div>
            <h3 class="uk-margin-bottom-remove"><strong>Мектеп интернат аты</strong></h3>
            <p>"Билал Кидс" соода маркасы мектеп интернатынын окуучуларын 350 жаңы баш кийимдер менен кубантышты. </p>
            <p><span class="uk-icon uk-icon-phone-square"> +996 000 000</p>
            <p><span class="uk-icon uk-icon-map-marker"></span> адресс</p>
        </div>
    </div>
</div>

<div class="uk-text-center"><h2 class="info-title" style="display: inline-block; margin-bottom: 20px;">отчеттор</h2></div>

<div class="uk-accordion" data-uk-accordion="{showfirst: false}">

    <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-border-rounded uk-margin-bottom">
        <h3 class="uk-accordion-title" style="margin: -15px 0; padding: 15px 0; cursor: pointer;"><span class="uk-icon uk-icon-calendar"></span> <strong>2016 жыл</strong> Сентябрь</h3>

        <div class="uk-accordion-content">
            <p class="uk-margin-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

            <div class="uk-grid uk-grid-small uk-grid-width-medium-1-3" data-uk-grid-margin>
                <div>
                    <a href="img/report/2.jpg" data-uk-lightbox="{group:'group1'}">
                        <img src="img/report/2.jpg" width="800" height="600" alt="">
                    </a>
                </div>
                <div>
                    <a href="img/report/8.jpg" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
                        <img src="img/placeholder_800x600_1.jpg" width="800" height="600" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>
</div>
</div>