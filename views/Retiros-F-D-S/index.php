<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RetirosFDSSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Retiros Fds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="retiros-fds-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Retiros Fds', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Codigo',
            'Fecha_inicio',
            'Fecha_fin',
            'Direccion',
            //'Id_ciudad',
            //'Nombre_ciudad',
            'ciudad.Nombre',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
