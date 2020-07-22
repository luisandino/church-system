<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IntegrantesComunidad */

$this->title = 'Update Integrantes Comunidad: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Integrantes Comunidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'Id' => $model->Id, 'Id_comunidades' => $model->Id_comunidades, 'Id_personas' => $model->Id_personas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="integrantes-comunidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
