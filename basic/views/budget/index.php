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
    <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
     <div class="col-sm-12 col-centered">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
     </div>
   </div>

    <div class="row">
      <div class="col-sm-12 col-centered">
            <div class="absolute"><?=$map->display()?></div>
      </div>
    </div>

<!--
    <p>
        <?= Html::a('Create Budget', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dana',
            'sumber',
            'lembaga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    -->
</div>
