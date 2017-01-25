<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lembaga */

$this->title = 'Update Lembaga: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lembagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container" style="padding-right:65px;">
<div class="row" >
	<div class="col-md-12">
    	<div class="sdm-index">
    		<h2>
			    Update Data SDM
			    <!-- <small>Version 2.0</small> -->
			  </h2><br>
			  <ol class="breadcrumb">
			    <li><a href="<?php echo \yii\helpers\Url::to(['/admin']); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			    <li class="active">SDM</li>
			  </ol>
			<div class="lembaga-update">
				<div class="box">
        			<div class="box-header with-border">
					  <!--   <h1><?= Html::encode($this->title) ?></h1> -->

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
