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
        </div>
    </div>
</div>
