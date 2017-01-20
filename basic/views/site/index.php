<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <?=$map->display()?>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <p><a class="btn btn-default" href="<?php echo \yii\helpers\Url::to(['/budget']); ?>">Budget &raquo;</a></p>
            </div>
            <div class="col-md-3">
                <p><a class="btn btn-default" href="<?php echo \yii\helpers\Url::to(['/sdm']); ?>">SDM &raquo;</a></p>
            </div>
            <div class="col-md-3">
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Lembaga &raquo;</a></p>
            </div>
            <div class="col-md-3">
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Output &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
