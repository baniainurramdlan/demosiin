<?php

use yii\helpers\Html;
use sjaakp\gcharts\ColumnChart;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BudgetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SIIN - Grafik Bar';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budget-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <!-- <?= Html::a('Create Budget', ['create'], ['class' => 'btn btn-success']) ?> -->

  <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
  <div class="container">
      <div class="col-md-4">
        Dana : Rp. 10.000.000 &nbsp; <a type="button" class="btn btn-primary btn-sm" href="<?php echo \yii\helpers\Url::to(['/budget/list']); ?>"><span class="glyphicon glyphicon-stats" aria-hidden="true">&nbsp;</span>List</a>
      </div>
  <div class="col-md-4">
    <?php
    echo Html::dropDownList('listname', null, [''=>'','totalfund'=>'Total Funding', 'cumulativefund'=>'Cumulative Funding'], ['class' => 'form-control', 'onchange'=>'javascript:pindah()','id'=>'idlistname']);
    ?>
    <script>
    function pindah() {
      var e = $("#idlistname").val();
      if (e == 'totalfund') {
      window.location.href = "<?php echo \yii\helpers\Url::to(['/budget/grafik']); ?>";
    } else if (e == 'cumulativefund') {
      window.location.href = "<?php echo \yii\helpers\Url::to(['/budget/grafik-line']); ?>";
    }
  }
    </script>
  </div>
  <div class="col-md-4"></div>
  </div>
  </div>
    <br />
    
      <div class="container">
      <?= ColumnChart::widget([
      'height' => '400px',
      'dataProvider' => $dataProvider,
      'columns' => [
        'tahun:string',
        'APBN',
        'apbd',
        'ln'
      ],
      'options' => [
        'title' => 'Total Funding',
      ],
      ]) ?>
      </div>
</div>
