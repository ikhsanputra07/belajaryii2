<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RaporMurid */

$this->title = $model->npm;
$this->params['breadcrumbs'][] = ['label' => 'Rapor Murids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rapor-murid-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->npm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->npm], [
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
            'npm',
            'nama',
            'mata_kuliah',
            'nilai',
        ],
    ]) ?>

</div>
