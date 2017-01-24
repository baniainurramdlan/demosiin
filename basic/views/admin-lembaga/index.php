<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LembagaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'Lembagas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembaga-index" style="padding-right:1cm; padding-left:1cm;">
<div class="row">
<div class="col-md-12">
    <div class="sdm-index">

    <h1> Lembaga</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class=""></i>Lembaga 1</a></li>
    <li class="active">Lembaga 2</li>
  </ol>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
  <div class="box">
        <div class="box-header with-border">
    <p>
        <?= Html::a('Create Lembaga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'website',
            'jumlah_departemen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
</div>