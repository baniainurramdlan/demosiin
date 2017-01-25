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
