<?php
	$arr = array(1,3,8,2,5,7,4,0);

	print("Sebelum Di Sorting :<br>");
	print_r($arr);

	$arr = bubble_sort($arr);
	print("<br> Setelah Disorting (Buble Sort) :<br>");
	print_r($arr);


	function bubble_sort($arr) {
		$arrLength = sizeof($arr);
		for($i = 0; $i < $arrLength ; $i++){
			for($j = 0 ; $j< ($arrLength - $i - 1) ; $j++){
				if($arr[$j] > $arr[$j+1]){
					$temp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $temp;
				}
			}
		}
		return $arr;
	}

?>
