<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Driver */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="driver-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'driver_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'driver_birthday')->textInput() ?>

    <?= $form->field($model, 'driver_phone')->textInput() ?>

    <?= $form->field($model, 'driver_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'driver_avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
