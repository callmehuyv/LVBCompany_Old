<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="line-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Line', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'line_id',
            'line_code',
            'line_start_time',
            'line_end_time',
            'line_map',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
