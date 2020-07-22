<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IntegrantesComunidad */

$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Integrantes Comunidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="integrantes-comunidad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id' => $model->Id, 'Id_comunidades' => $model->Id_comunidades, 'Id_personas' => $model->Id_personas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id' => $model->Id, 'Id_comunidades' => $model->Id_comunidades, 'Id_personas' => $model->Id_personas], [
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
            'Id',
            'Id_comunidades',
            'Id_personas',
        ],
    ]) ?>

</div>
