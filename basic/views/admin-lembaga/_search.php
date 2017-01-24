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

     <?php
     $id= yii\helpers\ArrayHelper::map(
            app\models\lembaga::find()->all()
            ,'id'
            ,function($model, $defaultValue){
                return $model['id'];
            }
            );

      $nama= yii\helpers\ArrayHelper::map(
            app\models\lembaga::find()->all()
            ,'id'
            ,function($model, $defaultValue){
                return $model['nama'];
            }
            );
    ?>


    <div class="box">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'id') 
                    ->dropDownList($id)
                ?>
            </div>
             <div class="col-md-4">
                <?= $form->field($model, 'nama') 
                    ->dropDownList($nama)
                ?>
            </div>
        </div> 

       <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
    </div>
</div>


    <?php ActiveForm::end(); ?>

</div>
