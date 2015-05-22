<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Line */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="line-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'line_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'line_start_time')->textInput() ?>

    <?= $form->field($model, 'line_end_time')->textInput() ?>

    <?= $form->field($model, 'line_map')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
