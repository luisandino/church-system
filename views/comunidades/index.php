<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComunidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comunidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comunidades-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comunidades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Id',
            'Nombre',
            'Fecha_creacion',
            //'Id_ciudad',
            'ciudad.Nombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
