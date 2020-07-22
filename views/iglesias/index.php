<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IglesiasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Iglesias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iglesias-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Iglesias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'Nombre',
            'Direccion',
            'Nombre_parroco',
            'Telefono',
            'Fecha_creacion',
            //'Id_ciudad',
            [
                'label' => 'Ciudad',
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
