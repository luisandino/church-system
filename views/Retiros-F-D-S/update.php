<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RetirosFDS */

$this->title = 'Update Retiros Fds: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Retiros Fds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="retiros-fds-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
