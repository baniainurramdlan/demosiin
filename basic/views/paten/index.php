<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PatenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paten';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paten-index">

    <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="container">
            <p>
            <a type="button" class="btn btn-primary" href="<?php echo \yii\helpers\Url::to(['/paper']); ?>"><span class="glyphicon glyphicon-paper" aria-hidden="true"></span>Paper</a>         
    
            &nbsp; | &nbsp;<a type="button" class="btn btn-primary" href="<?php echo \yii\helpers\Url::to(['/paten']); ?>" disabled><span class="glyphicon glyphicon-block" aria-hidden="true"></span>Paten</a>          
            </p>
            <br />
            <p>
        <?php echo $this->render('_search', ['model' => $searchModel]); ?>
            </p>
        </div>
    </div>
    
    <div class="row">
        <div class="container">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
            'lembaga',
            'bidang_ilmu',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
                </div>
    </div>
