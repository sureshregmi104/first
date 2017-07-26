<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'for_work',
            'title',
            'first_name',
            'last_name',
            // 'email:email',
            // 'password',
            // 'guests',
            // 'smoking',
            // 'guest_name',
            // 'special_request:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
