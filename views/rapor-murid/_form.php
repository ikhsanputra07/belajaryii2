<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RaporMurid */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rapor-murid-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'npm')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mata_kuliah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
