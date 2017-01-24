<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sdm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sdms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sdm-view">

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
            'id',
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