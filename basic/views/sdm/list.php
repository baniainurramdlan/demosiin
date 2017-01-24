<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BudgetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SIIN - List SDM';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdm-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- <?= Html::a('Create Budget', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <br />
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'nama',

            [
           'label'=>'nama',
           'format' => 'raw',
       'value'=>function ($data) {
            return Html::a($data->nama,['sdm/profile','id'=>$data->id]);
        },
    ],
            'gelar',
            'lembaga',
            'bidang_ilmu',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
