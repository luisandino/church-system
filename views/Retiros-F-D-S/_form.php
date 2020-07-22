<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Ciudad;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\RetirosFDS */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="retiros-fds-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Codigo')->textInput() ?>

    <?= $form->field($model, 'Fecha_inicio')->widget(DateTimePicker::className(), [
            'language' => 'es',
            'size' => 'ms',
            'template' => '{input}',
            'pickButtonIcon' => 'glyphicon glyphicon-time',
            'inline' => false,
            'clientOptions' => [
                'startView' => 2,
                'minView' => 2,
                'maxView' => 3,
                'autoclose' => true,
                'linkFormat' => 'yyyy-mm-dd', // if inline = true
                'format' => 'yyyy-mm-dd', // if inline = false
                'todayBtn' => true
            ]
        ]);  ?>

    <?= $form->field($model, 'Fecha_fin')->widget(DateTimePicker::className(), [
            'language' => 'es',
            'size' => 'ms',
            'template' => '{input}',
            'pickButtonIcon' => 'glyphicon glyphicon-time',
            'inline' => false,
            'clientOptions' => [
                'startView' => 2,
                'minView' => 2,
                'maxView' => 3,
                'autoclose' => true,
                'linkFormat' => 'yyyy-mm-dd', // if inline = true
                'format' => 'yyyy-mm-dd', // if inline = false
                'todayBtn' => true
            ]
        ]);  ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_ciudad')->dropDownList(
        ArrayHelper::map(Ciudad::find()->all(),'Id','Nombre')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
