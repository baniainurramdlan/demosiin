<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sdm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sdm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gelar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lembaga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang_ilmu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
