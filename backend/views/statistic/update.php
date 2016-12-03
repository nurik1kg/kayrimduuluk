<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Statistic */

$this->title = 'Статистиканы өзгөртүү';
//$this->params['breadcrumbs'][] = ['label' => 'Statistics', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statistic-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
