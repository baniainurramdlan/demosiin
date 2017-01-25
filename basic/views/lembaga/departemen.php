<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BudgetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SIIN - Lembaga';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembaga-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <!-- <?= Html::a('Create Budget', ['create'], ['class' => 'btn btn-success']) ?> -->
    
    <div class="container">
        <h1><?php echo $model -> {'nama'}; ?></h1>
   
        <br />
        <div class="col-md-12">
            <div class="well">
                <?php echo Html::a('<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> &nbsp; Semua Departemen', ['/lembaga/list', 'id'=>$id_lembaga]); ?>
                <?php echo " &nbsp;|&nbsp; " . $model -> {'jumlah_peneliti'} . " Peneliti &nbsp;|&nbsp; " . $model -> {'jumlah_dokumen'} . " Dokumen"; ?>
            </div>
            
             <?php echo $this->render('//peneliti/_search', ['model' => $searchModel]); ?>
       
            <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
            'label'=>'nama',
            'format' => 'raw',
            'value'=>function ($data) {
             return Html::a($data->nama,['sdm/profile','id'=>3]);
                },
            ],
            'jumlah_paten',
            'jumlah_paper',
            //'id_departemen',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
            
        </div>
    </div>
</div>
