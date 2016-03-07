<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RaporMurid */

$this->title = 'Create Rapor Murid';
$this->params['breadcrumbs'][] = ['label' => 'Rapor Murids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rapor-murid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
