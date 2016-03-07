<html>
	<body>
	<?php 
		// use yii\grid\GridView;

		// var_dump($dataProvider)
		?>


		 <?= \yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
       	'filterModel'=>$model,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'npm',
            'nama',
            [
            	'attribute'=>'mata_kuliah',
            	'value'=>function($model){
            		return ucwords($model->mata_kuliah.'aaaaaa');
            	}
            ],
            'nilai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	</body>
















<?php
// var_dump($model);
// foreach ($model as $key => $value) {
	// echo $value->nama;
	// echo "</br>";
// }
?>
</html>