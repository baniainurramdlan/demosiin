<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaperSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paper-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    
          <div class="col-md-6">
    <?= $form->field($model, 'bidang_ilmu') ->dropDownList ([
      ''=>''
      ,'bioteknologi'=>'Bioteknologi'
      ,'biodiesel'=>'Biodiesel'
      ])?>
      </div>    
        <div class="col-md-6">
    <?= $form->field($model, 'lembaga') ->dropDownList ([
      ''=>''
      ,'bppt'=>'BPPT'
      ,'itb'=>'ITB'
      ])?>
    </div>
    
    <div class="col-md-12">
    <?= $form->field($model, 'nama', [
           'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
     ])->textInput()->input('name', ['placeholder' => "Search..."])->label(false); ?>
    </div>
    
    <!--
    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'lembaga') ?>

    <?= $form->field($model, 'bidang_ilmu') ?>
-->

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Reset',['/paper'], ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
