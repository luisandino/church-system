<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Paises;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ciudades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciudades-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ciudades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Codigo',
            'Nombre',
            'Fecha_creacion',
            'Id_paises',            
            'paises.Nombre',
            //'paises.Codigo',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
