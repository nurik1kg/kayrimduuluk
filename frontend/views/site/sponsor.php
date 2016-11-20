<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 16.11.16
 * Time: 9:55
 */
$this->title = Yii::t('app','sponsors');
?>
<div class="sponsor-page">
    <div class="mountains">
        <div class="uk-container uk-container-center utrain">
            <div class="uk-slidenav-position" data-uk-slider="{autoplay:false, autoplayInterval:1500}">
                <div class="uk-slider-container">
                    <ul class="uk-slider uk-grid-width-medium-1-4">

                        <?php foreach ($sponsors as $sponsor){?>
                        <li>
                            <div class="trnm">
                                <div class="trnm-logo"><img src="<?='/'.Yii::$app->params['urlSponsor'].$sponsor->photo?>"></div>
                            </div>
                        </li>
                        <?php } ?>
                        <li>
                            <div class="trnm">
                                <div class="trnm-logo"><img src="/style/img/sponsor/1.png"></div>
                            </div>
                        </li>
                        <li>
                            <div class="trnm locomotive">
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next train-next-arrow arrow-animate" data-uk-slider-item="previous"></a>
            </div>
        </div>
    </div>
</div>
