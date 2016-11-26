<?php
use yii\helpers\Url;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= $this->title ?></title>
    <link rel="shortcut icon" href="/style/favicon.ico" type="image/png">
    <link rel="shortcut icon" href="/style/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="/style/img/apple-touch-icon.png">
    <link rel="stylesheet" href="/style/css/bagyt.css">
    <link rel="stylesheet" href="/style/css/uikit.css">
    <link rel="stylesheet" href="/style/css/components/slideshow.css">
    <link rel="stylesheet" href="/style/css/components/slider.css">
    <link rel="stylesheet" href="/style/css/components/slidenav.css">
    <script src="/style/js/jquery.js"></script>
    <script src="/style/js/uikit.min.js"></script>
    <script src="/style/js/core/scrollspy.min.js"></script>
    <script src="/style/js/core/modal.min.js"></script>
    <script src="/style/js/core/smooth-scroll.min.js"></script>
    <script src="/style/js/components/slideshow.min.js"></script>
    <script src="/style/js/components/slider.js"></script>
    <script src="/style/js/components/accordion.min.js"></script>

</head>

<body>
<?php $this->beginBody() ?>

<div class="top">
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-3">
            <div class="call"><span class="uk-icon-phone-square"><?=' '.Yii::t('app','source_number')?></div>
        </div>
        <div class="uk-width-1-3">
            <div class="uk-text-center"><div class="logo"><a href=""><img src="/style/img/logo_bagyt.png"></a></div></div>
        </div>
        <div class="uk-width-1-3">
            <div class="uk-float-right dnpbtn">
                <a href="#modal-donate" data-uk-modal="{center:true}" class="uk-button uk-button-primary uk-margin-top uk-margin-right uk-border-rounded"><?=Yii::t('app','to_help')?></a>
                <div id="modal-donate" class="uk-modal modaldonate">
                    <div class="uk-modal-dialog uk-border-rounded" style="max-width: 350px;">
                        <button class="uk-modal-close uk-close" type="button"></button>
                        <form class="uk-form" onsubmit="return Help_to()">
                            <fieldset data-uk-margin>
                                <legend><?=Yii::t('app','help_anket')?></legend>
                                <p><input type="text" placeholder="<?=Yii::t('app','anket_names')?>" class="uk-width-1-1" id="aName" required></p>
                                <p><input type="text" placeholder="<?=Yii::t('app','anket_phone')?>" class="uk-width-1-1" id="aPhone" required></p>
                                <p><input type="email" placeholder="<?=Yii::t('app','anket_email')?>" class="uk-width-1-1" id="aEmail" required></p>
                                <button class="uk-button uk-button-primary uk-border-rounded uk-width-1-1"><?=Yii::t('app','anket_send')?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header">
    <nav class="uk-navbar">
        <div class="uk-navbar-nav">
            <?php
            use pjhl\multilanguage\assets\ChangeLanguageAsset;
            ChangeLanguageAsset::register($this);
            ?>
            <a href="#" class="multilanguage-set <?=Yii::$app->language=='kg-KG'?'lang lang-kg':'lang'; ?>" data-language="1">KG</a>
            <a href="#" class="multilanguage-set <?=Yii::$app->language=='ru-RU'?'lang lang-kg':'lang'; ?>" data-language="2">RU</a>
            <a href="#" class="multilanguage-set <?=Yii::$app->language=='en-EN'?'lang lang-kg':'lang'; ?>" data-language="3">EN</a>
            <!--
            <a href="<?=Url::toRoute(['site/lang','l'=>1])?>" class="<?=Yii::$app->language=='kg-KG'?'lang lang-kg':'lang'; ?>">KG</a>
            <a href="<?=Url::toRoute(['site/lang','l'=>2])?>" class="<?=Yii::$app->language=='ru-RU'?'lang lang-kg':'lang'; ?>">RU</a>
            <a href="<?=Url::toRoute(['site/lang','l'=>3])?>" class="<?=Yii::$app->language=='en-US'?'lang lang-kg':'lang'; ?>">EN</a>
            -->
        </div>

        <div class="uk-navbar-flip">
            <a href="#" class="uk-icon-button uk-icon-facebook-square"></a>
            <a href="#" class="uk-icon-button uk-icon-instagram"></a>
        </div>

        <div class="uk-width uk-container-center uk-text-center uk-hidden-small" style="max-width: 575px">
            <ul class="uk-navbar-nav">
                <?php if (Yii::t('app','home')==$this->title) {?>
                <li class="uk-active"><a href="<?=Url::toRoute('site/index')?>"><span class="uk-icon-home"></span></a></li>
                <?php }else{ ?>
                <li><a href="<?=Url::toRoute('site/index')?>"><span class="uk-icon-home"></span></a></li>
                <?php } if (Yii::t('app','sponsors')==$this->title){?>
                <li class="uk-active"><a href="<?=Url::toRoute('site/sponsors')?>">Демөөрчүлөр</a></li>
                <?php }else{ ?>
                <li><a href="<?=Url::toRoute('site/sponsors')?>">Демөөрчүлөр</a></li>
                <?php } if (Yii::t('app','news')==$this->title){?>
                <li class="uk-active"><a href="<?=Url::toRoute('site/news')?>">Жаңылыктар</a></li>
                <?php }else{ ?>
                <li><a href="<?=Url::toRoute('site/news')?>">Жаңылыктар</a></li>
                <?php } if (Yii::t('app','about')==$this->title){?>
                <li class="uk-active"><a href="<?=Url::toRoute('site/about')?>">Фонд тууралуу</a></li>
                <?php }else{ ?>
                <li><a href="<?=Url::toRoute('site/about')?>">Фонд тууралуу</a></li>
                <?php } if (Yii::t('app','great_names')==$this->title){?>
                <li class="uk-active"><a href="<?=Url::toRoute('site/great_names')?>">Белгилүү инсандар</a></li>
                <?php }else{ ?>
                <li><a href="<?=Url::toRoute('site/great_names')?>">Белгилүү инсандар</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>

<?=$content ?>

<div class="footer">
    <div class="uk-width uk-container-center uk-text-center uk-hidden-small" style="max-width: 850px">
        <div class="uk-text-center"><div class="logo"><a href=""><img src="/style/img/logo_bagyt.png"></a></div></div>
        <hr>
        <a href="<?=Url::toRoute('site/index')?>"><?=Yii::t('app','page_index')?></a> | <a href="<?=Url::toRoute('site/sponsors')?>"><?=Yii::t('app','page_sponsors')?></a> | <a href="<?=Url::toRoute('site/news')?>"><?=Yii::t('app','page_news')?></a> | <a href="<?=Url::toRoute('site/about')?>"><?=Yii::t('app','page_about')?></a> | <a href="<?=Url::toRoute('site/great_names');?>"><?=Yii::t('app','page_people')?></a>
        <hr>
        <div style="height: 40px">
            <div class="call uk-margin-remove uk-float-left"><span class="uk-icon-phone-square"><?=' '.Yii::t('app','source_number')?></div>
            <div class="arrow-bottom-animate"><a href="#top" data-uk-smooth-scroll="" class="gototop"><img src="/style/img/gotop.png"></a></div>
            <div class="uk-float-right">
                <a href="#" class="uk-icon-button uk-icon-facebook-square"></a>
                <a href="#" class="uk-icon-button uk-icon-instagram"></a>
            </div>
        </div>
    </div>
</div>



<script src="/style/js/javas.js"></script>
<script>
    function Help_to() {
        var nameAnket = $('#aName').val();
        var phoneAnket = $('#aPhone').val();
        var emailAnket = $('#aEmail').val();
        $.ajax({
            url: '/site/helping',
            type: "GET",
            data: {'name':nameAnket,'phone':phoneAnket,'email':emailAnket},
            success: function(data){
                console.log(data);
                alert(data);
            },
            error: function (data) {
                console.log(data);
                alert('Filed! '+data);
            }
        });
    }
    function Help_to2() {
        var nameAnket = $('#aName2').val();
        var phoneAnket = $('#aPhone2').val();
        var emailAnket = $('#aEmail2').val();
        $.ajax({
            url: '/site/helping',
            type: "GET",
            data: {'name':nameAnket,'phone':phoneAnket,'email':emailAnket},
            success: function(data){
                console.log(data);
                alert(data);
            },
            error: function (data) {
                console.log(data);
                alert('Filed! '+data);
            }
        });
    }
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
