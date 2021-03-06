<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LembagaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lembaga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <!--
    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'website') ?>

    <?= $form->field($model, 'jumlah_departemen') ?>
    -->
    <div class="col-md-4"></div>
      <div class="col-md-4">
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
