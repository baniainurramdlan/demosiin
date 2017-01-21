<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<div class="row">
  <div class="col-md-12 col-centered">
    <div class="jumbotron">
        <?=$map->display()?>
    </div>
  </div>
</div>

    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <center><a class="btn btn-default" href="<?php echo \yii\helpers\Url::to(['/budget']); ?>">Budget &raquo;</a></center>
            </div>
            <div class="col-md-3">
                <center><a class="btn btn-default" href="<?php echo \yii\helpers\Url::to(['/sdm']); ?>">SDM &raquo;</a></center>
            </div>
            <div class="col-md-3">
                <center><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Lembaga &raquo;</a></center>
            </div>
            <div class="col-md-3">
                <center><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Output &raquo;</a></center>
            </div>
        </div>

    </div>
</div>
