<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sdm */
?>

<?php
$this->title = 'Create Sdm';
$this->params['breadcrumbs'][] = ['label' => 'Sdms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
	<div class="col-md-12">
			   <h1><?= Html::encode($this->title) ?></h1>
			   		 <div class="box box-info">
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
			
