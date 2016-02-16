<?php

$arrWeek=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
$day='Monday';

foreach($arrWeek as $v){
	if($v==$day){
		echo '<b>'.$v.'</b>'.'<br>';
	} else {
		echo $v.'<br>';
	}
}