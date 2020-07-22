<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Ciudad;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Iglesias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="iglesias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nombre_parroco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono')->textInput() ?>

    <?= $form->field($model, 'Id_ciudad')->dropDownList(ArrayHelper::map(
        ciudad::find()->all(),'Id','Nombre'
    )) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
