<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'Админ панель',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-default',
            ],
        ]);
        if (Yii::$app->user->isGuest) {
            $menuItems2[] = ['label' => 'Login', 'url' => ['/site/login']];
            $menuItems3[] = '<a href="/"><button type="button" class="btn btn-primary menu-button">Сайтты көрүү</button></a>';

        } else {
            $menuItems[]=['label' => 'Башкы бет', 'url' => ['/site/index']];
            $menuItems[]=['label' => 'Балдар', 'url' => ['/child/index']];
            $menuItems[]=['label' => 'Камкорчулар', 'url' => ['/consern/index']];
            $menuItems[]=['label' => 'Өнөктөштөр', 'url' => ['/sponsor/index']];

            $menuItems2[] = '<li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">'.Yii::$app->user->identity->username. '<span class="caret"></span></a>
                <ul id="w3" class="dropdown-menu">
                <li>'. Html::beginForm(['/site/logout'], 'post'). Html::submitButton(
                    'Чыгуу',
                    ['class' => 'btn','style'=>'background: none;padding: 6px 55px;']
                )
                . Html::endForm().'</li></ul></li>';

            $menuItems3[] = '<a href="/"><button type="button" class="btn btn-primary menu-button">Сайтты көрүү</button></a>';


            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-left'],
                'items' => $menuItems,
            ]);

        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems2,
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems3,
        ]);
        NavBar::end();
        ?>

    <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
