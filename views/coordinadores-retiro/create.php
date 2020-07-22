<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CoordinadoresRetiro */

$this->title = 'Create Coordinadores Retiro';
$this->params['breadcrumbs'][] = ['label' => 'Coordinadores Retiros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinadores-retiro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
