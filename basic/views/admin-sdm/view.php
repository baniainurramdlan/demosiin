<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sdm */

$this->title = 'SIIN - SDM View';
$this->params['breadcrumbs'][] = ['label' => 'Sdms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdm-view container" style="padding-right:50px;">
    <h2>
    View SDM
    <!-- <small>Version 2.0</small> -->
  </h2><br>
  <ol class="breadcrumb">
    <li><a href="<?php echo \yii\helpers\Url::to(['/admin']); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">SDM</li>
    <li class="active">Detail</li>
  </ol>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <div class="sdm-index">
        <div class="sdm-update">
            <div class="box">
                <div class="box-header with-border">
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
          
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'nama',
            'gelar',
            'lembaga',
            'bidang_ilmu',
        ],
    ]) ?>

</div>
</div>
</div>
</div>
</div>