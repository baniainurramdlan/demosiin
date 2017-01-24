<?php

use yii\helpers\Html;
use sjaakp\gcharts\LineChart;
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
    <div class="row">
    <div class="container">
    <div class="col-md-4"></div>
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
      <?= LineChart::widget([
      'height' => '400px',
      'dataProvider' => $dataProvider,
      'columns' => [
        'tahun:string',
        'APBN',
        'apbd',
        'ln'
      ],
      'options' => [
        'title' => 'Cumulative Funding',
      ],
      ]) ?>
</div>
