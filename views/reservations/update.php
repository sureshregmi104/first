<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservations */

$this->title = 'Update Reservations: ' . $model->reservation_id;
$this->params['breadcrumbs'][] = ['label' => 'Reservations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reservation_id, 'url' => ['view', 'id' => $model->reservation_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reservations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
