<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Paten */

$this->title = 'Update Paper: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paper-update container" style="padding-right:65px;">
	<div class="row" >
	 <div class="col-md-12">
	  	<div class="lembaga-update">
	  		<h2>
			    Update Data Output Paper
			    <!-- <small>Version 2.0</small> -->
			  </h2><br>
			  <ol class="breadcrumb">
			    <li><a href="<?php echo \yii\helpers\Url::to(['/admin']); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			    <li class="active">Paper</li>
			  </ol>
				<div class="box">
        			<div class="box-header with-border">

				    <?= $this->render('_form', [
				        'model' => $model,
				    ]) ?>

</div>
					 </div>
			</div>
		</div>
	</div>
</div>
</div>