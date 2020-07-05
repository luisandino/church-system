<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Ciudad;

/* @var $this yii\web\View */
/* @var $model app\models\Comunidades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comunidades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'Fecha_creacion')->textInput() ?> -->

    <?= $form->field($model, 'Id_ciudad')->dropDownList(
        ArrayHelper::map(Ciudad::find()->all(),'Id','Nombre')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
