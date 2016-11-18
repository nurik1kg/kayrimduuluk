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
</head>

<body>
<?php $this->beginBody() ?>

<div class="top">
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-3">
            <div class="call"><span class="uk-icon-phone-square"> +996 777 555 444</div>
        </div>
        <div class="uk-width-1-3">
            <div class="uk-text-center"><div class="logo"><a href=""><img src="/style/img/logo_bagyt.png"></a></div></div>
        </div>
        <div class="uk-width-1-3">
            <div class="uk-float-right dnpbtn">
                <a href="#modal-donate" data-uk-modal="{center:true}" class="uk-button uk-button-primary uk-margin-top uk-margin-right uk-border-rounded">Жардам берүү</a>
                <div id="modal-donate" class="uk-modal modaldonate">
                    <div class="uk-modal-dialog uk-border-rounded" style="max-width: 350px;">
                        <button class="uk-modal-close uk-close" type="button"></button>
                        <form class="uk-form">
                            <fieldset data-uk-margin>
                                <legend>Жардам берүү анкетасы</legend>
                                <p><input type="text" placeholder="Аты жөнүңүз" class="uk-width-1-1"></p>
                                <p><input type="text" placeholder="Телефон номуруңуз" class="uk-width-1-1"></p>
                                <p><input type="text" placeholder="E-mail" class="uk-width-1-1"></p>
                                <button class="uk-button uk-button-primary uk-border-rounded uk-width-1-1">Жөнөттүү</button>
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
            <a href="#" class="lang lang-kg">KG</a>
            <a href="#" class="lang">RU</a>
            <a href="#" class="lang">EN</a>
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
        <a href="">Башкы бет</a> | <a href="">Демөөрчүлөр</a> | <a href="">Жаңылыктар</a> | <a href="">Фонд тууралуу</a> | <a href="">Белгилүү инсандар</a>
        <hr>
        <div style="height: 40px">
            <div class="call uk-margin-remove uk-float-left"><span class="uk-icon-phone-square"> +996 777 555 444</div>
            <div class="arrow-bottom-animate"><a href="#top" data-uk-smooth-scroll="" class="gototop"><img src="/style/img/gotop.png"></a></div>
            <div class="uk-float-right">
                <a href="#" class="uk-icon-button uk-icon-facebook-square"></a>
                <a href="#" class="uk-icon-button uk-icon-instagram"></a>
            </div>
        </div>
    </div>
</div>



<script src="/style/js/javas.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
