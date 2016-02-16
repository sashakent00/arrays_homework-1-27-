<?php

$arrWeek=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
$w1='Saturday';
$w2='Sunday';
foreach($arrWeek as $v){
	if($v==$w1 OR $v==$w2){
		echo '<b>'.$v.'</b>'.'<br>';
	} else {
		echo $v.'<br>';
	}


}