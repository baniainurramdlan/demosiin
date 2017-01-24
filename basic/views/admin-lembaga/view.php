<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lembaga */

// $this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lembagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembaga-view"  style="padding-right:1.5cm; padding-left:0.8cm; padding-top:0.5cm;">
    <h2>
    Detail Data Lembaga
  </h2><br>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class=""></i>Lembaga 1</a></li>
    <li class="active">Lembaga 2</li>
  </ol>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <div class="sdm-index">
        <div class="sdm-update">
            <div class="box">
                <div class="box-header with-border">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'nama',
            'website',
            'jumlah_departemen',
        ],
    ]) ?>

</div>
</div>
</div>
</div>
</div>
</div>