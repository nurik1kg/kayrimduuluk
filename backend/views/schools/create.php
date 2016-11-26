<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Schools */

$this->title = 'Мектепти кошуу';
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Schools'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schools-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
