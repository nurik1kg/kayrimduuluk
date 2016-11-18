<?php

/* @var $this yii\web\View */

$this->title = 'Админ панель ';
?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <a href="<?= \yii\helpers\Url::toRoute('news/index');?>"><div class="col-md-3 text-center border" style="margin:26px; padding: 15px;">
                    <img src="/img/news.png" alt="" width="100px;"><h4>Жаңылыктар</h4>
                </div></a>
           <!-- <a href="<?= \yii\helpers\Url::toRoute('consern/index');?>"><div class="col-md-3 text-center border" style="margin:26px; padding: 15px;">
                    <img src="/img/wit.png" alt="" width="100px;"><h4>Камкорчулар</h4>
                </div></a> -->
            <a href="<?= \yii\helpers\Url::toRoute('people/index');?>"><div class="col-md-3 text-center border" style="margin:26px; padding: 15px;">
                    <img src="/img/bman.png" alt="" width="100px;"><h4>Белгилүү инсандар</h4>
                </div></a>
            <a href="<?= \yii\helpers\Url::toRoute('sponsor/index');?>"><div class="col-md-3 text-center border" style="margin:26px; padding: 15px;">
                    <img src="/img/part.png" alt="" width="100px;"><h4>Өнөктөштөр</h4>
                </div></a>
        </div>
        <div class="row">
            <a href="<?=\yii\helpers\Url::toRoute('statistic/index') ?>"><div class="col-md-11 border" style="margin:25px; padding: 15px;">
                    <h2>Статистика</h2>
                            <?php
                            $aaa = \app\models\Statistic::findOne(1);
                            echo '<p>Балдардын жалпы саны <b>'.($aaa->help+$aaa->helped).'</b></p>';
                            echo '<p>Жардам алынды <b>'.$aaa->helped.'</b></p>';
                            echo '<p>Жардам алына элек <b>'.$aaa->help.'</b></p>';
                            ?>
                </div></a>
        </div>
    </div>
</div>
