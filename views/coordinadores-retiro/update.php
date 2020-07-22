<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CoordinadoresRetiro */

$this->title = 'Update Coordinadores Retiro: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Coordinadores Retiros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'Id' => $model->Id, 'Id_personas' => $model->Id_personas, 'Id_retiros_FDS' => $model->Id_retiros_FDS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coordinadores-retiro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
