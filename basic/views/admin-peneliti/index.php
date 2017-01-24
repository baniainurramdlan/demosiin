<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenelitiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penelitis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peneliti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Peneliti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'jumlah_paten',
            'jumlah_paper',
            'id_departemen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
