<?php

$arrMonth=['January','February','March','April','May','June','July','August','September','October','November','December'];
$month='February';

foreach($arrMonth as $v){
	if($v==$month){
		echo '<b>'.$v.'</b>'.'<br>';
	} else {
		echo $v.'<br>';
	}
}