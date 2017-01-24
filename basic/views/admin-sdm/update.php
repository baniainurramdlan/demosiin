<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sdm */

$this->title = 'Update Sdm: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sdms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
	<div class="col-md-12">
    	<div class="sdm-index">
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
