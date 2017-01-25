<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LembagaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SIIN - Lembaga';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container" style="padding-right:50px;">
<div class="row">
<div class="col-md-12">
    <div class="sdm-index">

    <h2> Lembaga</h2>
  <ol class="breadcrumb">
    <li><a href="<?php echo \yii\helpers\Url::to(['/admin']); ?>"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Lembaga</li>
  </ol>
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