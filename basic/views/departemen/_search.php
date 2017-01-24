<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DepartemenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departemen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nama') ?>
    <!--
    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jumlah_peneliti') ?>

    <?= $form->field($model, 'jumlah_dokumen') ?>

    <?= $form->field($model, 'id_lembaga') ?>
     -->

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
