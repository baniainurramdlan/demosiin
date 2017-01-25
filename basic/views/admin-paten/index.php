<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PatenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paten-index container" style="padding-right:65px;">
<div class="row">
<div class="col-md-12">
<div class="sdm-index">

    <h1>Aktivitas</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo \yii\helpers\Url::to(['/admin']); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Aktivitas
      </ol>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box">
        <div class="box-header with-border">
    <p>
        <?= Html::a('Create Paten', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'lembaga',
            'bidang_ilmu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
</div>
