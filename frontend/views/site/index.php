<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app','home');
?>
<div class="section1">
    <div class="arrow-top uk-text-center">
        <img class="arrow-animate " src="/style/img/arrow-top.png">
    </div>
    <div class="container-section1">
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-1-2">
                <div class="section1-block1">
                    <div class="section1-sub-block">

                    </div>
                </div>
            </div>

            <div class="uk-width-1-2">
                <div class="section1-block2">
                    <div class="section1-sub-block1">
                        <div class="sub-panel">
                            <h2 class="sub-title"><?=Yii::t('app','1-demoorchu')?><br><?= ' '.Yii::t('app','1-okuuchu')?></h2>
                            <p><?=Yii::t('app','1_dem_okuu_text')?></p>
                            <a href="#modal-donate" data-uk-modal="{center:true}" class="uk-button uk-button-primary uk-border-rounded"><span class="uk-icon-user-plus"></span><?= ' '.Yii::t('app','join_us')?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="arrow-bottom">
        <div class="balls-animate"><a href="#asus" data-uk-smooth-scroll="{offset: -25}"><img src="/style/img/arrow-bottom.png"></a></div>
    </div>
</div>

<div class="section-info1">
    <div class="uk-container uk-container-center">
        <h2 class="stat1"><?=Yii::t('app','uluttuk_stat_title')?></h2>
        <div class="uk-width uk-container-center uk-text-center uk-hidden-small" style="max-width: 850px">
            <div class="uk-grid uk-grid-medium" data-uk-scrollspy="{cls:'uk-animation-fade', target:'.mystat', delay:100, repeat: true}">
                <div class="uk-width-1-4 mystat">
                    <div class="stat-panel" style="background: #3d8eb9">
                        80 000
                    </div>
                    <p class="stat-panel-text"><?=Yii::t('app','uluttuk_stat1')?></p>
                </div>
                <div class="uk-width-1-4 mystat">
                    <div class="stat-panel" style="background: #fba026 ">
                        15 000
                    </div>
                    <p class="stat-panel-text"><?=Yii::t('app','uluttuk_stat2')?></p>
                </div>
                <div class="uk-width-1-4 mystat">
                    <div class="stat-panel" style="background: #41a85f">
                        500 - 700
                    </div>
                    <p class="stat-panel-text"><?=Yii::t('app','uluttuk_stat3')?></p>
                </div>
                <div class="uk-width-1-4 mystat">
                    <div class="stat-panel" style="background: #e14938">
                        70 - 80%
                    </div>
                    <p class="stat-panel-text"><?=Yii::t('app','uluttuk_stat4')?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="asus" class="section-info">
    <div class="uk-container uk-container-center">
        <h1 class="info-title" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}"><?=Yii::t('app','bala_onug');?></h1>
        <p class="uk-contrast uk-text-large uk-text-center uk-margin-bottom-remove dnb" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true, delay:200}"><?=Yii::t('app','bala_onug2');?></p>
    </div>
</div>


<div class="section2">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            <?=Yii::t('app','jash7');?>
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section2-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','thisAsan')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan7min_tit')?></h2>
                            <p data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:400}"><?=Yii::t('app','asan7text')?></p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section2-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="uk-text-right"><img src="/style/img/uson/Yson.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:400}"></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','thisUson')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><?=Yii::t('app','uson7min_tit')?></h2>
                            <p data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:400}"><?=Yii::t('app','uson7text')?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section3">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            <?=Yii::t('app','jash9');?>        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section3-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aAsan')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan9title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan9text')?> </p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan9.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section3-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}"><a id="dad" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aUson')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><?=Yii::t('app','uson9title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><?=Yii::t('app','uson9text')?></p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not" href="#modal-donate" data-uk-modal="{center:true}" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section5">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            <?=Yii::t('app','jash11');?>        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section4-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aAsan')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan11title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan11text')?></p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan11.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section4-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy1" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:400}"><a id="dad2" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aUson')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><?=Yii::t('app','uson11title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><?=Yii::t('app','uson11text')?></p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not2" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section5">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            <?=Yii::t('app','jash15');?>        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section5-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aAsan')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan15title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan15text')?></p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan15.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section5-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy2" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:400}"><a id="dad3" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aUson')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><?=Yii::t('app','uson15title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:300}"><?=Yii::t('app','uson15text')?></p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not3" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded"><?=Yii::t('app','aUson')?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section6">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            <?=Yii::t('app','jash18');?>
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section6-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aAsan')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan18title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"> <?=Yii::t('app','asan18text')?></p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan18.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section6-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy3" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:400}"><a id="dad4" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aUson')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><?=Yii::t('app','uson18title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:300}"><?=Yii::t('app','uson18text')?></p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not4" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section7">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            <?=Yii::t('app','jash23');?>        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section7-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aAsan')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan23title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan23text')?></p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan23.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section7-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy4" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}"><a id="dad1" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:400}"><?=Yii::t('app','aUson')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><?=Yii::t('app','uson23title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:300}"><?=Yii::t('app','uson23text')?></p>
                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not1" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section8">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            <?=Yii::t('app','jash27');?>
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section8-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><?=Yii::t('app','aAsan')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan27title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><?=Yii::t('app','asan27text')?></p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan27.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section8-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy5" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}"><a id="dad1" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:400}"><?=Yii::t('app','aUson')?></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><?=Yii::t('app','uson27title')?></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:300}"><?=Yii::t('app','uson27title')?></p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not1" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-donate">
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section-donate-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">

                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section-donate-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <h3 class="bduu" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}"><?=Yii::t('app','title_s');?></h3>
                    <p class="bduur" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true, delay:200}"><?=Yii::t('app','mini_text_s');?></p>
                    <div class="feedback" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        <h3 class="uk-text-contrast"><?=Yii::t('app','jardam_beruu_anketasy')?></h3>
                        <div class="uk-form">
                            <p><input placeholder="<?=Yii::t('app','anket_names') ?>" type="text" class="uk-form-large uk-width-1-1"></p>
                            <p><input placeholder="<?=Yii::t('app','anket_phone') ?>" type="text" class="uk-form-large uk-width-1-1"></p>
                            <p><input placeholder="<?=Yii::t('app','anket_email') ?>" type="text" class="uk-form-large uk-width-1-1"></p>
                            <button class="uk-button uk-button-large uk-button-success uk-border-rounded" type="button"><?=Yii::t('app','submit_help') ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-diagram">
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2 dbg-fs">
            <div class="section-diagram1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><strong><?=Yii::t('app','have_sponsor')?></strong></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:500}"><?=Yii::t('app','have_sponsor_text')?></p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div style="box-sizing: border-box; padding: 0 35px 0 100px;" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, delay:300}">
                                <div class="line-chart-text-1">
                                    <h3><?=$statistic->helped?></h3>
                                    <p><?=Yii::t('app','childs')?></p>
                                </div>
                                <div class="line-chart-green" style="height: 150px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2 dbg-fd">
            <div class="section-diagram2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div style="box-sizing: border-box; padding: 0 100px 0 35px;" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, delay:100}">
                                <div class="line-chart-text">
                                    <h3><?=$statistic->help?></h3>
                                    <p><?=Yii::t('app','childs')?></p>
                                </div>
                                <div class="line-chart" style="height: 300px;"></div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><strong><?=Yii::t('app','no_sponsor')?></strong></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><?=Yii::t('app','no_sponsor_text')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-info">
    <div class="uk-container uk-container-center">
        <h1 class="info-title" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}"><?=Yii::t('app','news')?></h1>
        <p class="uk-contrast uk-text-large uk-text-center uk-margin-bottom-remove dnb" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true, delay:200}"><?=Yii::t('app','jetishkendikter')?></p>
    </div>
</div>

<div class="section-news">
    <div class="uk-container uk-container-center">
        <div class="uk-width uk-container-center uk-text-center uk-hidden-small" style="max-width: 850px">
            <div class="uk-grid" data-uk-scrollspy="{cls:'uk-animation-fade', target:'.fnews', delay:100, repeat: true}">
                <div class="uk-width-1-3 fnews">
                    <div class="uk-panel uk-panel-box">
                        <div class="uk-panel-teaser">
                            <img src="/style/img/news/news1.png">
                        </div>
                        <h3 class="uk-margin-bottom-remove"><strong>"Билал Кидс" соода маркасы</strong></h3>
                        <p class="uk-text-muted uk-margin-top-remove">04.11.16</p>
                        <p class="uk-margin-bottom">"Билал Кидс" соода маркасы мектеп интернатынын окуучуларын 350 жаңы баш кийимдер менен кубантышты. </p>
                        <a href="" class="uk-button uk-button-primary uk-border-rounded">Уландысы...</a>
                    </div>
                </div>
                <div class="uk-width-1-3 fnews">
                    <div class="uk-panel uk-panel-box">
                        <div class="uk-panel-teaser">
                            <img src="/style/img/news/news2.png">
                        </div>
                        <h3 class="uk-margin-bottom-remove"><strong>Жайкы эс алуу<br> лагерь</strong></h3>
                        <p class="uk-text-muted uk-margin-top-remove">04.11.16</p>
                        <p class="uk-margin-bottom">2016 - жылкы жайкы эс алуу лагерибизге белгилүү режиссер Сүйүн Откеев агабыз "Мегатой" тасмасы менен келип, балдарга... </p>
                        <a href="" class="uk-button uk-button-primary uk-border-rounded">Уландысы...</a>
                    </div>
                </div>
                <div class="uk-width-1-3 fnews">
                    <div class="uk-panel uk-panel-box">
                        <div class="uk-panel-teaser">
                            <img src="/style/img/news/news.png">
                        </div>
                        <h3 class="uk-margin-bottom-remove"><strong>1 - сентябрь окуу күнүндө</strong></h3>
                        <p class="uk-text-muted uk-margin-top-remove">04.11.16</p>
                        <p class="uk-margin-bottom">1 - сентябрь окуу күнүндө ар бир бала мектепке бараарда толкунданып, өзгөчө сезимдер коштоп турат.</p>
                        <a href="" class="uk-button uk-button-primary uk-border-rounded">Уландысы...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>