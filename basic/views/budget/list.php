<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BudgetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SIIN - Budget';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budget-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- <?= Html::a('Create Budget', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>
    
    <div class="container">
        <div class="row">
          <div class="col-md-6"> Dana : Rp. 10.000.000 &nbsp; <a type="button" class="btn btn-primary btn-sm" href="<?php echo \yii\helpers\Url::to(['/budget/grafik']); ?>"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp; Grafik</a></div>
          <div class="col-md-6"><span class="pull-right"><a type="button" class="btn btn-success btn-sm" href="<?php echo \yii\helpers\Url::to(['/budget/']); ?>"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp; Kembali</a></span></div>
        </div>
    </div>  
    
    <br />
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'dana',
            'sumber',
            'lembaga',
            'tahun',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
