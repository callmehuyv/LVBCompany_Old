<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Line */

$this->title = 'Update Line: ' . ' ' . $model->line_id;
$this->params['breadcrumbs'][] = ['label' => 'Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->line_id, 'url' => ['view', 'id' => $model->line_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="line-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
