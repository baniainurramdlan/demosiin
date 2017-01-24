<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LembagaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lembagas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembaga-index">
<div class="row">
<div class="col-md-12">
    <div class="sdm-index">
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

            'id',
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