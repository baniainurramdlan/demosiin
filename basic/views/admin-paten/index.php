<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PatenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paten-index" style="padding-right:1cm; padding-left:1cm;">
<div class="row">
<div class="col-md-12">
<div class="sdm-index">

    <h1>Output</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Output</li>
      </ol>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box">
        <div class="box-header with-border">
    <p>
        <?= Html::a('Create Paten', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'lembaga',
            'bidang_ilmu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
</div>
