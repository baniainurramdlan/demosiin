<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lembaga */

$this->title = 'Create Lembaga';
$this->params['breadcrumbs'][] = ['label' => 'Lembagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container" style="padding-right:50px;">
<div class="row">
	<div class="col-md-12">
		<div class="lembaga-create">

    <h2><?= Html::encode($this->title) ?></h2>
    	<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li class="active">Lembaga</li>
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
