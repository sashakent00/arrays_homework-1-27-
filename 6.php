<?php

$arr = ["green"=>"зеленый", "red"=>"красный", "blue"=>"голубой"];
$en=[];
$ru=[];
foreach($arr as $k=>$v){
	array_push($ru, $v);
	array_push($en, $k);	
}
echo '<pre>';
print_r($ru) . '<br>';
print_r($en);