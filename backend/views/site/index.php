<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <a href="<?= \yii\helpers\Url::toRoute('child/index');?>"><div class="col-md-3 text-center border" style="margin:26px; padding: 15px;">
                    <img src="/img/boy.png" alt="" width="100px;"><h4>Балдар</h4>
                </div></a>
            <a href="<?= \yii\helpers\Url::toRoute('consern/index');?>"><div class="col-md-3 text-center border" style="margin:26px; padding: 15px;">
                    <img src="/img/wit.png" alt="" width="100px;"><h4>Камкорчулар</h4>
                </div></a>
            <a href="<?= \yii\helpers\Url::toRoute('sponsor/index');?>"><div class="col-md-3 text-center border" style="margin:26px; padding: 15px;">
                    <img src="/img/part.png" alt="" width="100px;"><h4>Өнөктөштөр</h4>
                </div></a>
        </div>
        <div class="row">
            <a href="#!"><div class="col-md-11 border" style="margin:25px; padding: 15px;">
                    <h2>Статистика</h2>
                    <p>Балдардын жалпы саны <b><?=count(\app\models\Child::find()->all())?></b></p>
                    <p>Кыздар <b><?=count(\app\models\Child::find()->where(['sex'=>2])->all())?></b></p>
                    <p>Балдар <b><?=count(\app\models\Child::find()->where(['sex'=>1])->all())?></b></p>
                </div></a>
        </div>
    </div>
</div>
