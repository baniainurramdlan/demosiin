    <?php

use yii\helpers\Html;
use yii\grid\GridView;
use fedemotta\datatables\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SdmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SIIN - Admin';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container" style="padding-right:49px;">
<div class="row">
<div class="col-md-12">
    <div class="sdm-index">
     <h1>
    SDM
    <!-- <small>Version 2.0</small> -->
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">SDM</li>
  </ol>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box" style="width:100%">
        <div class="box-header with-border">
            <p><?= Html::a('Create Sdm', ['create'], ['class' => 'btn btn-success']) ?></p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                // 'id',
                'nama',
                'gelar',
                'lembaga',
                'bidang_ilmu',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

       
    </div>
</div>
</div>
</div>
</div>

</div> 
