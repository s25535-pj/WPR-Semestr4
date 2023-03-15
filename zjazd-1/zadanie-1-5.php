<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta lang="pl">
<title>zadanie-1-5</title>
<!-- <link href="zadanie1.css" rel="stylesheet" type="text/css"> -->
</head>
<body>

<?php
function calculateTriangle($a, $h){
	return ($a * $h)/2;
}
function calculateRectangle($a, $h){
	return ($a * $h);
}
function calculateTrapeze($a, $b, $h){
	return (($a + $b)*$h)/2;
}
function calculateSurfaceArea($figure, $a, $b, $h){
	switch($figure) {
		case "Triangle":
			return calculateTriangle($a, $h);
			break;
		
		case "Rectangle":
			return calculateRectangle($a, $h);
			break;
		
		case "Trapeze":
			return calculateTrapeze($a, $b, $h);
			break;

		default:
			echo "No such option";
	
		}
}
$a = 10;
$b = 4;
$h = 6;
echo "The result is: ".calculateSurfaceArea("Triangle", $a, $b, $h)."\n";
echo "The result is: ".calculateSurfaceArea("Rectangle", $a, $b, $h)."\n";
echo "The result is: ".calculateSurfaceArea("Trapeze", $a, $b, $h)."\n";
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd1/zadanie1-5.php -->
