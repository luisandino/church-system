<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paises';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paises-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Paises', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Id',
            'Codigo',
            'Nombre',
            'Fecha_creacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
