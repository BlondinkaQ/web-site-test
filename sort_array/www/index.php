<?php

$arr_1=array(2,4,6,3,1,5,8,9,7,0,-5);

$sort=true;

while ($sort) {
	$sort=false;
	for ($i=0; $i <count($arr_1)-1; $i++){
		if ($arr_1[$i]>$arr_1[$i+1]){
			$temp = $arr_1[$i];
			$arr_1[$i]=$arr_1[$i+1];
			$arr_1[$i+1]=$temp;
			$sort=true;
}
}
}


var_dump($arr_1);

?>