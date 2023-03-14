<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta lang="pl">
<title>zadanie-1-4</title>
</head>
<body>

<?php
function getBirthDate($pesel){
	return substr($pesel,0,2)."-".
	substr($pesel,2,2)."-".
	substr($pesel,4,2);
}

echo "Birth date is: ".getBirthDate("10039911001");
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd1/zadanie1-4.php -->
