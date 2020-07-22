<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Religiones */

$this->title = 'Update Religiones: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Religiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="religiones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
