<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Paten */

$this->title = 'Create Paper';
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container" style="padding-right:50px;">
<div class="row">
	<div class="col-md-12">
		<div class="lembaga-create">
			<div class="paper-create">

    			<h2>Create Output</h2>
    			<ol class="breadcrumb">
				    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				    <li class="active">Output</li>
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
