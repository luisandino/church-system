<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Iglesias */

$this->title = 'Create Iglesias';
$this->params['breadcrumbs'][] = ['label' => 'Iglesias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iglesias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
