<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CoordinadoresRetiro */

$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Coordinadores Retiros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="coordinadores-retiro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id' => $model->Id, 'Id_personas' => $model->Id_personas, 'Id_retiros_FDS' => $model->Id_retiros_FDS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id' => $model->Id, 'Id_personas' => $model->Id_personas, 'Id_retiros_FDS' => $model->Id_retiros_FDS], [
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
            'Id_personas',
            'Id_retiros_FDS',
            'Fecha_creacion',
        ],
    ]) ?>

</div>
