<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Paten */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-view container" style="padding-right:65px;">
      <h2>
    Detail Data Output
  </h2><br>
  
  <ol class="breadcrumb">
    <li><a href="<?php echo \yii\helpers\Url::to(['/admin']); ?>"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Detail data paper</li>
   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Output</li>
     <li class="active">View 1</li>
  </ol>
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
            'lembaga',
            'bidang_ilmu',
        ],
    ]) ?>
</div>
</div>
</div>
</div>
</div>
</div>