<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BudgetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="budget-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!--<?= $form->field($model, 'id') ?> -->
  <div class="col-md-3">
    <?= $form->field($model, 'dana') ->dropDownList ([
      ''=>''
      ,'10000000'=>'10.000.000'
      ,'20000000'=>'20.000.000'
      ,'30000000'=>'30.000.000'
      ,'40000000'=>'40.000.000'
      ,'50000000'=>'50.000.000'
      ,'60000000'=>'60.000.000'
      ])?>

  </div>
  <div class="col-md-3">
    <?= $form->field($model, 'sumber') ->dropDownList ([
      ''=>''
      ,'apbd'=>'APBN'
      ,'apbn'=>'APBN'
      ,'ln'=>'LN'
      ])?>
  </div>

  <div class="col-md-3">
    <?= $form->field($model, 'lembaga') ->dropDownList ([
      ''=>''
      ,'bpbd'=>'BPBD'
      ,'ristekdikti'=>'RISTEKDIKTI'
      ,'unces'=>'UNCES'
      ])?>
  </div>

  <div class="col-md-3">
    <?= $form->field($model, 'subject') ->dropDownList ([
      ''=>''
      ,'bioteknologi'=>'Bioteknologi'
      ,'biofuel'=>'Biofuel'
      ,'meteorologi'=>'Meteorologi'
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
