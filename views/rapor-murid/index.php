<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RaporMuridSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rapor Murids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rapor-murid-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rapor Murid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'npm',
            'nama',
            'mata_kuliah',
            'nilai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
