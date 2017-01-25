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

    			<h1><?= Html::encode($this->title) ?></h1>
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
