<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovimientoReligiosoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movimiento Religiosos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimiento-religioso-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Movimiento Religioso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nombre',
            'Fecha_creacion',
            [
                'label' => 'Religiones',
                'attribute' => 'Id_religiones',
                'value' => function($model){
                    $Religiones = app\models\Religiones::find()->where(['Id'=>$model->Id_religiones])->one();
                    return $Religiones->Nombre;
                }
            ],
            [
                'label' => 'Ciudades',
                'attribute' => 'Id_ciudad',
                'value' => function($model){
                    $Ciudad = app\models\Ciudad::find()->where(['Id'=>$model->Id_ciudad])->one();
                    return $Ciudad->Nombre;
                }
            ],                        

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
