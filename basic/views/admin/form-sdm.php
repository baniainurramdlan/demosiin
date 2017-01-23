<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sdm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sdm-form">

    <?php $form = ActiveForm::begin(); ?>

     <div class="form-group">
             <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
     </div>
     <div class="form-group">
              <?= $form->field($model, 'gelar')->textInput(['maxlength' => true]) ?>
     </div>
      <div class="form-group">
              <?= $form->field($model, 'lembaga')->textInput(['maxlength' => true]) ?>
     </div>
        <div class="form-group">
                <?= $form->field($model, 'bidang_ilmu')->textInput(['maxlength' => true]) ?>
     </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
