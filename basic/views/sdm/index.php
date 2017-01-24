<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SdmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SIIN - SDM';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdm-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    
    <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
     <div class="col-sm-12 col-centered">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
     </div>
   </div>

    <div class="row">
      <div class="col-sm-12 col-centered">
        <?=$map->display()?>
      </div>
    </div>

    <!--
    <p>
        <?= Html::a('Create Sdm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'gelar',
            'lembaga',
            'bidang_ilmu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  -->
</div>
