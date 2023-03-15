<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta lang="pl">
<title>zadanie-3-2</title>
</head>
<body>

<?php
function throwTheDice($numberOfThrows){
	$scores = [];
	while ($numberOfThrows != 0){
		array_push($scores, rand(1,6));
		$numberOfThrows--;
	}
	return $scores;
}
function printArray($array){
	foreach($array as $element){
		echo $element."\n";
	}
}

$numberOfThrows = 10;
printArray(throwTheDice($numberOfThrows));
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd1/zadanie3-2.php -->
