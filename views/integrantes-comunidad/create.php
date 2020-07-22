<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IntegrantesComunidad */

$this->title = 'Create Integrantes Comunidad';
$this->params['breadcrumbs'][] = ['label' => 'Integrantes Comunidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="integrantes-comunidad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
