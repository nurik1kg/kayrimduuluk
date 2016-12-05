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
            <div class="uk-slidenav-position" data-uk-slider="{autoplay:true, autoplayInterval:1500}">
                <div class="uk-slider-container">
                    <ul class="uk-slider uk-grid-width-medium-1-4">

                        <?php foreach ($sponsors as $sponsor){?>
                        <li>
                            <div class="trnm">
                                <div class="trnm-logo"><img src="<?='/'.Yii::$app->params['urlSponsor'].$sponsor->photo?>"></div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
