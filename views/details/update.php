<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Details */

$this->title = 'Update Details: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
