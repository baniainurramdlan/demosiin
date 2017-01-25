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
<<<<<<< HEAD
    <li><a href="<?php echo \yii\helpers\Url::to(['/admin']); ?>"><i class="fa fa-home"></i> Home</a></li>
=======
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
>>>>>>> 5ad61751d829aa297e65f910759e6fee9fe7e2fe
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