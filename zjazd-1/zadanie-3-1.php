<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta lang="pl">
<title>zadanie-3-1</title>
</head>
<body>

<?php
function returnMaxValueForLoop($array){
	$temp = $array[0];
	for($i = 0; $i < count($array); $i++){
		if($temp < $array[$i]){
			$temp = $array[$i];
		}
	}
	return $temp;
}
function returnMaxValueWhileLoop($array){
	$temp = $array[0];
	$i = 0;
	while($i < count($array)){
		if($temp < $array[$i]){
			$temp = $array[$i];
		}
		$i++;
	}
	return $temp;
}
function returnMaxValueDoWhileLoop($array){
	$temp = $array[0];
	$i = 0;
	do{
		if($temp < $array[$i]){
			$temp = $array[$i];
		}
		$i++;
	}while($i < count($array));
	return $temp;
}
function returnMaxValueForEachLoop($array){
	$temp2 = $array[0];
	foreach($array as $i){
		if($temp2 < $i){
			$temp2 = $i;
		}
	}
	return $temp2;
}

$array = [2, 3, 5, 9, 10, 1, 6, 4, 8, 7];
shuffle($array);
echo "For loop: ".returnMaxValueForLoop($array)."\n";
shuffle($array);
echo "While loop: ".returnMaxValueWhileLoop($array)."\n";
shuffle($array);
echo "DoWhile loop: ".returnMaxValueDoWhileLoop($array)."\n";
shuffle($array);
echo "ForEach loop: ".returnMaxValueForEachLoop($array)."\n";
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd1/zadanie3-1.php -->
