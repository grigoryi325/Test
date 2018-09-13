<?
$str = " All GPS satellites broadcast 0 at the same 2 frequencies, -1.57542 GHz - L1 signal, and 1.2276 GHz - L2 signal -8 ";

function SearchNum($str){
	$mass = explode(" ", $str);
	$j = 0;
	for($i = 0; $i<count($mass); $i++){
		if((ctype_digit($mass[$i]))||($mass[$i]>0)||($mass[$i]<0)){
			$result[$j] = $mass[$i];
			$j++;
		}
	}
	return $result;
}

function PrintResult($result){
	for($i = 0; $i<count($result); $i++){
		echo $result[$i]."<br>";
	}
}

PrintResult(SearchNum($str))
?>