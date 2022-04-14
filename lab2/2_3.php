<?php

$array = array ();
$sum = 0;

for($i=0;$i<=9;$i++){
	array_push($array,rand(1,99));
}

$s = "Все элементы массива: \n";
for ($i = 0; $i < 10; $i++){
	$s.= "[".$array[$i]."]";
}

for ($i = 0; $i < 10; $i++){
	$sum += $array[$i];
}
$s.= "\nСумма всех элементов массива = {$sum}\n";
echo $s;

?>
