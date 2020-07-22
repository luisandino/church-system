<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoordinadoresRetiro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coordinadores-retiro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_personas')->textInput() ?>

    <?= $form->field($model, 'Id_retiros_FDS')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
