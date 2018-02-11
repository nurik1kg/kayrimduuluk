<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Reports */

$this->title = 'Отчёт кошуу';
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reports'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reports-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
