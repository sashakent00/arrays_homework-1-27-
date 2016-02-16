<?php

$arr = array("green"=>"зеленый", "red"=>"красный", "blue"=>"голубой");

foreach($arr as $key => $v){
	echo "Key = ". $key .'<br>';
}
echo '<br>';
foreach($arr as $v){
	echo "Vlaue = ". $v .'<br>';
}