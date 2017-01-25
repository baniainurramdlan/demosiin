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
        <h4><?php echo "<a href=http://www.".$model -> {'website'}.">" .$model -> {'website'}."</a>"; ?></h4>
        <br />
        <div class="col-md-12">
            <div class="well">
                <?php echo $model -> {'jumlah_departemen'} . " Departemen"; ?>
            </div>
            
             <?php echo $this->render('//departemen/_search', ['model' => $searchModel]); ?>
        
                <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
           'label'=>'nama',
           'format' => 'raw',
       'value'=>function ($data) {
            return Html::a($data->nama,['/lembaga/departemen','id_lembaga'=>$data->id_lembaga,'id_departemen'=>$data->id]);
        },
    ],
            'jumlah_peneliti',
            'jumlah_dokumen',
            //'id_lembaga',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
            
        </div>
    </div>
</div>
