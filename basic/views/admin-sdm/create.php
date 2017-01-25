<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sdm */
?>

<?php
$this->title = 'SIIN - Create SDM';
$this->params['breadcrumbs'][] = ['label' => 'Sdms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container" style="padding-right:50px;">
<div class="row">
	<div class="col-md-12">
			   <h2>Create SDM</h2><br>
			   	  <ol class="breadcrumb">
				    <li><a href="<?php echo \yii\helpers\Url::to(['/admin']); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				    <li class="active">SDM</li>
				    <li class="active">Create</li>
				  </ol>
			   		 <div class="box box-info" >
		       			<div class="box-header with-border">
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