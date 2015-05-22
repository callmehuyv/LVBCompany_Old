<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Line */

$this->title = $model->line_id;
$this->params['breadcrumbs'][] = ['label' => 'Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="line-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->line_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->line_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'line_id',
            'line_code',
            'line_start_time',
            'line_end_time',
            'line_map',
        ],
    ]) ?>

</div>
