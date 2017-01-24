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
        <h4><?php echo "http://www." . $model -> {'website'}; ?></h4>
        
        <div class="jumbotron">
            <div class="col-md-12">
                <?php echo $model -> {'jumlah_departemen'} . " Departemen"; ?>
            </div>
        </div>
    </div>
</div>
