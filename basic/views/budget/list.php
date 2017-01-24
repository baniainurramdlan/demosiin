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

    <p>
        Dana : Rp. 10.000.000 &nbsp; <a type="button" class="btn btn-primary btn-sm" href="index.php?r=budget/grafik"><span class="glyphicon glyphicon-stats" aria-hidden="true"> Grafik</a></span>
    </p>
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
