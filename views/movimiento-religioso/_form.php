<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Religiones;
use app\models\Ciudad;

/* @var $this yii\web\View */
/* @var $model app\models\MovimientoReligioso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movimiento-religioso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_religiones')->dropDownList(
        ArrayHelper::map(Religiones::find()->all(),'Id','Nombre')
    ) ?>

    <?= $form->field($model, 'Id_ciudad')->dropDownList(
        ArrayHelper::map(Ciudad::find()->all(),'Id','Nombre')
    )  ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
