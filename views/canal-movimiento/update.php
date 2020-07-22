<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CanalMovimiento */

$this->title = 'Update Canal Movimiento: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Canal Movimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="canal-movimiento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
