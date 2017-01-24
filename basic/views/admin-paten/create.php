<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Paten */

$this->title = 'Create Paten';
$this->params['breadcrumbs'][] = ['label' => 'Patens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
