<?php

$start=1;
$finish=9;

for($i=$start;$i<=$finish; $i++){
	for($j=$start;$j<=$finish; $j++){
		echo "$i * $j =". $i * $j .'<br>';
	}
	echo '<br>';
}