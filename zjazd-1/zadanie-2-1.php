<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta lang="pl">
<title>zadanie-2-1</title>
</head>
<body>

<?php
function returnNumberFromIndex($index){
	$randomNumbers = [10,7,8,6,3,2,4,1,11,35];
	if($index >= 0 && $index <= count($randomNumbers)){
		return $randomNumbers[$index];
	} else {
		return null;
	}
}

$x = 0;
$y = 11;
$z = -3;
echo "Number for index $x = ".returnNumberFromIndex($x)."\n";
echo "Number for index $y = ".returnNumberFromIndex($y)."\n";
echo "Number for index $z = ".returnNumberFromIndex($z)."\n";
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd1/zadanie2-1.php -->
