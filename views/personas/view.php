<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Personas */

$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Nombre',
            'Apellido',
            'Telefono_fijo',
            'Numero_documento',
            'Direccion',
            'Email:email',
            'Telefono_movil',
            [
                'label'=>'Pareja Equipo',
                'attribute'=>'Pareja_equipo',
                'value'=>function($model){
                    $Result = ($model->Pareja_equipo==0)?'Si':'No';
                    return $Result;}
            ],
            [
                'label'=>'Pareja Florecida',
                'attribute'=>'Pareja_florecida',
                'value'=>function($model){
                    $Result = ($model->Pareja_florecida==0)?'Si':'No';
                    return $Result;}
            ],            
            'Fecha_nacimiento',
            [
                'label' => 'Iglesias',
                'attribute' => 'Id_iglesias',
                'value' => function($model){
                    $Iglesias = app\models\Iglesias::find()->where(['Id'=>$model->Id_iglesias])->one();
                    return $Iglesias->Nombre;
                }
            ],
            [
                'label' => 'Ciudad',
                'attribute' => 'Id_ciudad',
                'value' => function($model){
                    $Ciudad = app\models\Ciudad::find()->where(['Id'=>$model->Id_ciudad])->one();
                    return $Ciudad->Nombre;
                }
            ],
            [
                'label' => 'Tipo Documento',
                'attribute' => 'Id_tipo_documento',
                'value' => function($model){
                    $TipoDocumento = app\models\TipoDocumento::find()->where(['Id'=>$model->Id_tipo_documento])->one();
                    return $TipoDocumento->Tipo_documento;
                }
            ],
            [
                'label' => 'Religiones',
                'attribute' => 'Id_religion',
                'value' => function($model){
                    $Religiones = app\models\Religiones::find()->where(['Id'=>$model->Id_religiones])->one();
                    return $Religiones->Nombre;
                }
            ],
            [
                'label' => 'Movimiento Religioso',
                'attribute' => 'Id_movimiento_religioso',
                'value' => function($model){
                    $Movimiento = app\models\MovimientoReligioso::find()->where(['Id'=>$model->Id_movimiento_religioso])->one();
                    return $Movimiento->Nombre;
                }
            ],
        ],
    ]) ?>

</div>
