<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RetirosFDSSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="retiros-fds-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Codigo') ?>

    <?= $form->field($model, 'Fecha_inicio') ?>

    <?= $form->field($model, 'Fecha_fin') ?>

    <?= $form->field($model, 'Direccion') ?>

    <?php // echo $form->field($model, 'Id_ciudad') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
