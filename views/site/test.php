<?php
var_dump($model);
echo "++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";

foreach ($model as $key => $value) 
{
	var_dump($value);
	echo "============================";
	echo $value->nama;
}
?>
