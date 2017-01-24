<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sdm */

// $this->title = 'Update Sdm: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sdms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row" style="padding-right:1.5cm; padding-left:0.8cm; padding-top:0.5cm;">
	<div class="col-md-12">
    	<div class="sdm-index">
    		  <h2>
			    Update Data SDM
			    <!-- <small>Version 2.0</small> -->
			  </h2><br>
			  <ol class="breadcrumb">
			    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			    <li class="active">SDM</li>
			  </ol>
			<div class="sdm-update">
				<div class="box">
        			<div class="box-header with-border">
					    <h1><?= Html::encode($this->title) ?></h1>

					    <?= $this->render('_form', [
					        'model' => $model,
					    ]) ?>
					   </div>
					 </div>
			</div>
		</div>
	</div>
</div>
