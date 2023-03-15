<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta lang="pl">
<title>zadanie-2-2</title>
</head>
<body>

<?php
function returnNationality($whoAmI){
	$nations = array(
		"Poland"=>"Pole",
		"Canada"=>"Canadian",
		"Germany"=>"German",
		"France" => "French"
	);
	return $nations[$whoAmI];
}

$nation = "Poland";
echo "My nation is $nation so I'm ".returnNationality($nation).".\n";
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd1/zadanie2-2.php -->
