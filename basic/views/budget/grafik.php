<?php

use yii\helpers\Html;
use sjaakp\gcharts\ColumnChart;
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
        Dana : Rp. 10.000.000 &nbsp; <a type="button" class="btn btn-primary btn-sm" href="index.php?r=budget/list"><span class="glyphicon glyphicon-stats" aria-hidden="true"> List</a></span>
    </p>
    <br />
      <?= ColumnChart::widget([
      'height' => '400px',
      'dataProvider' => $dataProvider,
      'columns' => [
          'subject:string',
          'dana'
      ],
      'options' => [
          'title' => 'Countries by Population'
      ],
      ]) ?>
</div>
