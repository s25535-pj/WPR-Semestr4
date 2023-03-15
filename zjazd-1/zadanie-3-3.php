<!-- <!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta lang="pl">
<title>zadanie-3-3</title>
</head>
<body> -->
<!-- Not working in pure PHP while in internet browser but in console works fine -->
<?php
function printMultiplicationTable(){
	$x = 1;
	$y = 1;
	for($i = 1; $i <= 9; $i++){
		printf("%' 3s", ($i));
	}
	echo "\n";
	while($x <= 9){
		echo "$x";
		while($y <= 9){
			printf("%' 2s ", ($x*$y));
			$y++;
		}
		$x++;
		$y = 1;
		echo "\n";
	}
}

printMultiplicationTable();
?>
<!-- </body>
</html>
http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd1/zadanie3-3.php -->
