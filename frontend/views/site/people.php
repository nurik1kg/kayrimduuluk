<?php
$this->title = Yii::t('app','great_names');

?>
<div class="news-page">
    <div class="uk-container uk-container-center">
        <div class="uk-text-center"><h1 class="info-title uk-margin-bottom" style="display: inline-block"><?=Yii::t('app','grate_man');?></h1></div>

        <div class="uk-width uk-container-center" style="max-width: 850px">
            <div class="uk-grid">
                <?php foreach ($peoples as $i => $people){
                    switch ($lang){
                        case 1:{ ?>
                            <div class="uk-width-1-3" style="margin-bottom: 25px;">
                                <a href="<?='#modal-blank'.$i?>" data-uk-modal=""><figure class="uk-overlay">
                                        <img  class="uk-overlay-scale uk-border-circle" src="<?='/'.Yii::$app->params['urlPeople'].$people->logo?>" width="600" height="400">
                                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-ignore">
                                            <h2 class="uk-text-center"><?=$people->name_kg?></h2>
                                        </figcaption>
                                    </figure></a>
                                <div id="<?='modal-blank'.$i?>" class="uk-modal">
                                    <div class="uk-modal-dialog uk-modal-dialog-blank">
                                        <button class="uk-modal-close uk-close" type="button"></button>
                                        <div class="uk-grid" data-uk-grid-margin="">
                                            <div class="uk-width-1-2">
                                                <div class="uk-slidenav-position" data-uk-slideshow="">
                                                    <ul class="uk-slideshow uk-slideshow-fullscreen">
                                                        <li><div class="uk-cover-background uk-position-cover" style="background-image: url(<?='/'.Yii::$app->params['urlPeople'].$people->image?>);"></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-1-2 uk-text-left" style="margin-top: 2%;">
                                                <ul class="uk-list uk-list-striped">
                                                    <li><h3><?=Yii::t('app','modal_name');?></h3></li>
                                                    <li><p><?=$people->name_kg?></p></li>
                                                    <li><h3><?=Yii::t('app','modal_birthday');?></h3></li>
                                                    <li><p><?=$people->birthday?></p></li>
                                                    <div><?=$people->content_kg?></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            break;
                        }
                        case 2:{ ?>
                            <div class="uk-width-1-3" style="margin-bottom: 25px;">
                                <a href="<?='#modal-blank'.$i?>" data-uk-modal=""><figure class="uk-overlay">
                                        <img  class="uk-overlay-scale uk-border-circle" src="<?='/'.Yii::$app->params['urlPeople'].$people->logo?>" width="600" height="400">
                                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-ignore">
                                            <h2 class="uk-text-center"><?=$people->name_ru?></h2>
                                        </figcaption>
                                    </figure></a>
                                <div id="<?='modal-blank'.$i?>" class="uk-modal">
                                    <div class="uk-modal-dialog uk-modal-dialog-blank">
                                        <button class="uk-modal-close uk-close" type="button"></button>
                                        <div class="uk-grid" data-uk-grid-margin="">
                                            <div class="uk-width-1-2">
                                                <div class="uk-slidenav-position" data-uk-slideshow="">
                                                    <ul class="uk-slideshow uk-slideshow-fullscreen">
                                                        <li><div class="uk-cover-background uk-position-cover" style="background-image: url(<?='/'.Yii::$app->params['urlPeople'].$people->image?>);"></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-1-2 uk-text-left" style="margin-top: 2%;">
                                                <ul class="uk-list uk-list-striped">
                                                    <li><h3><?=Yii::t('app','modal_name');?></h3></li>
                                                    <li><p><?=$people->name_ru?></p></li>
                                                    <li><h3><?=Yii::t('app','modal_birthday');?></h3></li>
                                                    <li><p><?=$people->birthday?></p></li>
                                                    <div><?=$people->content_ru?></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            break;
                        }
                        case 3:{ ?>
                            <div class="uk-width-1-3" style="margin-bottom: 25px;">
                                <a href="<?='#modal-blank'.$i?>" data-uk-modal=""><figure class="uk-overlay">
                                        <img  class="uk-overlay-scale uk-border-circle" src="<?='/'.Yii::$app->params['urlPeople'].$people->logo?>" width="600" height="400">
                                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-ignore">
                                            <h2 class="uk-text-center"><?=$people->name_en?></h2>
                                        </figcaption>
                                    </figure></a>
                                <div id="<?='modal-blank'.$i?>" class="uk-modal">
                                    <div class="uk-modal-dialog uk-modal-dialog-blank">
                                        <button class="uk-modal-close uk-close" type="button"></button>
                                        <div class="uk-grid" data-uk-grid-margin="">
                                            <div class="uk-width-1-2">
                                                <div class="uk-slidenav-position" data-uk-slideshow="">
                                                    <ul class="uk-slideshow uk-slideshow-fullscreen">
                                                        <li><div class="uk-cover-background uk-position-cover" style="background-image: url(<?='/'.Yii::$app->params['urlPeople'].$people->image?>);"></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-1-2 uk-text-left" style="margin-top: 2%;">
                                                <ul class="uk-list uk-list-striped">
                                                    <li><h3><?=Yii::t('app','modal_name');?></h3></li>
                                                    <li><p><?=$people->name_en?></p></li>
                                                    <li><h3><?=Yii::t('app','modal_birthday');?></h3></li>
                                                    <li><p><?=$people->birthday?></p></li>
                                                    <div><?=$people->content_en?></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            break;
                        }
                        default:{ ?>
                            <div class="uk-width-1-3" style="margin-bottom: 25px;">
                                <a href="<?='#modal-blank'.$i?>" data-uk-modal=""><figure class="uk-overlay">
                                        <img  class="uk-overlay-scale uk-border-circle" src="<?='/'.Yii::$app->params['urlPeople'].$people->logo?>" width="600" height="400">
                                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-ignore">
                                            <h2 class="uk-text-center"><?=$people->name_kg?></h2>
                                        </figcaption>
                                    </figure></a>
                                <div id="<?='modal-blank'.$i?>" class="uk-modal">
                                    <div class="uk-modal-dialog uk-modal-dialog-blank">
                                        <button class="uk-modal-close uk-close" type="button"></button>
                                        <div class="uk-grid" data-uk-grid-margin="">
                                            <div class="uk-width-1-2">
                                                <div class="uk-slidenav-position" data-uk-slideshow="">
                                                    <ul class="uk-slideshow uk-slideshow-fullscreen">
                                                        <li><div class="uk-cover-background uk-position-cover" style="background-image: url(<?='/'.Yii::$app->params['urlPeople'].$people->image?>);"></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-1-2 uk-text-left" style="margin-top: 2%;">
                                                <ul class="uk-list uk-list-striped">
                                                    <li><h3><?=Yii::t('app','modal_name');?></h3></li>
                                                    <li><p><?=$people->name_kg?></p></li>
                                                    <li><h3><?=Yii::t('app','modal_birthday');?></h3></li>
                                                    <li><p><?=$people->birthday?></p></li>
                                                    <div><?=$people->content_kg?></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            break;
                        }
                    }
                }?>
            </div>
        </div>
    </div>
</div>

