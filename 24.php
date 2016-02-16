<?php

$a='12934567899';
$b=9;
$lenght=strlen($a);
$check=0;

for ($i=0;$i<=$lenght;$i++){
	if($a[$i]==$b){
		$check++;
	}
}
echo $check;