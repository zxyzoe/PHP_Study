<?php
	$array=array(12,3,5,2,0);
	for($i=0;$i<count($array);$i++){
		for($j=$i+1;$j<count($array);$j++){
			if($array[$i]>$array[$j]){
				$temp=$array[$i];
				$array[$i]=$array[$j];
				$array[$j]=$temp;
			}
		}
	}
	print_r($array);
?>