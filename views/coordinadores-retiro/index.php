<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoordinadoresRetiroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coordinadores Retiros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinadores-retiro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coordinadores Retiro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_personas',
            'Id_retiros_FDS',
            'Fecha_creacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
