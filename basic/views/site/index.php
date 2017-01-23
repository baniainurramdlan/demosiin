<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'SIIN - Home';
?>
<div class="site-index">

<div class="row">
  <div class="col-md-12 col-centered">
    <div class="jumbotron">
        <div class="absolute" style="border: 10px solid black"><?=$map->display()?></div>
    </div>
  </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <center><a class="btn btn-default" href="<?php echo \yii\helpers\Url::to(['/budget']); ?>">
                  <?php echo Html::img('@web/images/budget.png', ['width'=>'100']) ?>
                  Budget &raquo;</a></center>
            </div>
            <div class="col-md-3">
                <center><a class="btn btn-default" href="<?php echo \yii\helpers\Url::to(['/sdm']); ?>">
                  <?php echo Html::img('@web/images/sdm.png', ['width'=>'50', 'height'=>'50']) ?>
                  SDM &raquo;</a></center>
            </div>
            <div class="col-md-3">
                <center><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">
                  <?php echo Html::img('@web/images/lembaga.png', ['width'=>'50', 'height'=>'50']) ?>
                  Lembaga &raquo;</a></center>
            </div>
            <div class="col-md-3">
                <center><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">
                  <?php echo Html::img('@web/images/output.png', ['width'=>'50', 'height'=>'50']) ?>
                  Output &raquo;</a></center>
            </div>
        </div>

    </div>
</div>
