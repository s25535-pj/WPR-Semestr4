<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta lang="pl">
<title>zadanie-3-4</title>
</head>
<body>
<?php

function checkIfPrimeNumber($number){
$switch = 0;
$x = 0;
	if ($number == 0 || $number == 1){
	  $switch = 1;
	}
	for ($i = 2; $i <= $number / 2; ++$i) {
		$x++;
	  if ($number % $i == 0) {
		$switch = 1;
		break;
	  }
	}
	if ($switch == 0){
		echo "Iterations = $x. ";
		return true;
	} else {
		echo "Iterations = $x. ";
		return false;
	}
}

  $number = 9;
  if(checkIfPrimeNumber($number)){
  	echo "Number $number is prime.";
  } else {
	echo "Number $number is not prime.";
  }
  $number = 7;
  if(checkIfPrimeNumber($number)){
  	echo "Number $number is prime.";
  } else {
	echo "Number $number is not prime.";
  }  
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd1/zadanie3-4.php -->
