<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RaporMurid */

$this->title = 'Update Rapor Murid: ' . ' ' . $model->npm;
$this->params['breadcrumbs'][] = ['label' => 'Rapor Murids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->npm, 'url' => ['view', 'id' => $model->npm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rapor-murid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
