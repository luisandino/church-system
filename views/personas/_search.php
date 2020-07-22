<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Apellido') ?>

    <?= $form->field($model, 'Telefono_fijo') ?>

    <?= $form->field($model, 'Numero_documento') ?>

    <?php // echo $form->field($model, 'Direccion') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Telefono_movil') ?>

    <?php // echo $form->field($model, 'Pareja_equipo') ?>

    <?php // echo $form->field($model, 'Pareja_florecida') ?>

    <?php // echo $form->field($model, 'Fecha_nacimiento') ?>

    <?php // echo $form->field($model, 'Id_iglesias') ?>

    <?php // echo $form->field($model, 'Id_ciudad') ?>

    <?php // echo $form->field($model, 'Id_tipo_documento') ?>

    <?php // echo $form->field($model, 'Id_religiones') ?>

    <?php // echo $form->field($model, 'Id_movimiento_religioso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
