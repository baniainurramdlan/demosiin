<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sdm */

$this->title = 'Create Sdm';
$this->params['breadcrumbs'][] = ['label' => 'Sdms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
