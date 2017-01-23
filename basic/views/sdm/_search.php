<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SdmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sdm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<!--
    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>
-->
  <div class="col-md-4">
    <?= $form->field($model, 'bidang_ilmu') ->dropDownList ([
      ''=>''
      ,'bioteknologi'=>'Bioteknologi'
      ,'biofuel'=>'Biofuel'
      ,'meteorologi'=>'Meteorologi'
      ])?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'lembaga') ->dropDownList ([
      ''=>''
      ,'bpbd'=>'BPBD'
      ,'ristekdikti'=>'RISTEKDIKTI'
      ,'unces'=>'UNCES'
      ])?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'gelar') ->dropDownList ([
      ''=>''
      ,'s1'=>'S1'
      ,'s2'=>'S2'
      ,'s3'=>'S3'
      ])?>
  </div>
  <!--
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>
  -->
    <?php ActiveForm::end(); ?>

</div>
