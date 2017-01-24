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

       <?php
     $sdm= yii\helpers\ArrayHelper::map(
            app\models\Sdm::find()->all()
            ,'id'
            ,function($model, $defaultValue){
                return $model['lembaga'];
            }
            );

      $bl= yii\helpers\ArrayHelper::map(
            app\models\Sdm::find()->all()
            ,'id'
            ,function($model, $defaultValue){
                return $model['bidang_ilmu'];
            }
            );
    ?>
    <div class="box">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-4">

                <?= $form->field($model, 'gelar') 
                    ->dropDownList($bl)
                ?>
            </div>
               <div class="col-md-4">
                <?= $form->field($model, 'lembaga') 
                    ->dropDownList($bl)
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
