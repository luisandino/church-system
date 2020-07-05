<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;
use yii\helpers\ArrayHelper;
use app\models\Paises;


/* @var $this yii\web\View */
/* @var $model app\models\Ciudad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ciudad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'Fecha_creacion')->widget(DateTimePicker::className(), [
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
    ]);?> -->

    <?= $form->field($model, 'Id_paises')->dropDownList(
        ArrayHelper::map(Paises::find()->all(),'Id','Nombre')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
