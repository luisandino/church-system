<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CanalMovimiento */

$this->title = 'Create Canal Movimiento';
$this->params['breadcrumbs'][] = ['label' => 'Canal Movimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canal-movimiento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
