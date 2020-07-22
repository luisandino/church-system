<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Ciudad;
use app\models\Iglesias;
use app\models\TipoDocumento;
use app\models\Religiones;
use app\models\MovimientoReligioso;
use dosamigos\datetimepicker\DateTimePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Personas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono_fijo')->textInput() ?>

    <?= $form->field($model, 'Numero_documento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono_movil')->textInput() ?>

    <?= $form->field($model, 'Pareja_equipo')->dropDownList(
        $items=['Si','No'],$options=[0,1]
    ) ?>

    <?= $form->field($model, 'Pareja_florecida')->dropDownList(
        $items=['Si','No'],$options=[0,1]
    ) ?>

    <?= $form->field($model, 'Fecha_nacimiento')->widget(DateTimePicker::className(), [
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
    ]);?>

    <?= $form->field($model, 'Id_iglesias')->dropDownList(
        ArrayHelper::map(Iglesias::find()->all(),'Id','Nombre')
    ) ?>

    <?= $form->field($model, 'Id_ciudad')->dropDownList(
        ArrayHelper::map(Ciudad::find()->all(),'Id','Nombre')
    ) ?>

    <?= $form->field($model, 'Id_tipo_documento')->dropDownList(
        ArrayHelper::map(TipoDocumento::find()->all(),'Id','Tipo_documento')        
    ) ?>

    <?= $form->field($model, 'Id_religiones')->dropDownList(
        ArrayHelper::map(Religiones::find()->all(),'Id','Nombre')        
    ) ?>

    <?= $form->field($model, 'Id_movimiento_religioso')->dropDownList(
        ArrayHelper::map(MovimientoReligioso::find()->all(),'Id','Nombre')        
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
