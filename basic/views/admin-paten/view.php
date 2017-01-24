<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Paten */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Patens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paten-view container" style="padding-right:65px;">
      <h2>
    Detail Data Lembaga
  </h2><br>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
    <li class="active">Detail data lembaga</li>
  </ol>
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
            'lembaga',
            'bidang_ilmu',
        ],
    ]) ?>
</div>
</div>
</div>
</div>
</div>
</div>