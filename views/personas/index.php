<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Personas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nombre',
            'Apellido',
            'Telefono_fijo',
            'Numero_documento',
            //'Direccion',
            'Email:email',
            //'Telefono_movil',
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
            ],            //'Fecha_nacimiento',
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
                'attribute' => 'Id_religiones',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
