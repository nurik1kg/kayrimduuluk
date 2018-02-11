<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\People */

$this->title = 'Белгилүү инсанды кошуу';
//$this->params['breadcrumbs'][] = ['label' => 'Peoples', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="people-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
