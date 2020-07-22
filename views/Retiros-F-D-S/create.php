<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RetirosFDS */

$this->title = 'Create Retiros Fds';
$this->params['breadcrumbs'][] = ['label' => 'Retiros Fds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="retiros-fds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
