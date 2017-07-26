<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReservationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'reservation_id') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'telephone_number') ?>

    <?= $form->field($model, 'notification') ?>

    <?= $form->field($model, 'card_number') ?>

    <?php // echo $form->field($model, 'expiry_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
