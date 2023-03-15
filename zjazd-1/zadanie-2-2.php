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
	if(array_key_exists($whoAmI, $nations)){
		return $nations[$whoAmI];
	} else return "Non-existent";
}

$nation1 = "Poland";
$nation2 = "England";
echo "My nation is $nation1 so I'm ".returnNationality($nation1).".\n";
echo "My nation is $nation2 so I'm ".returnNationality($nation2).".\n";
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd1/zadanie2-2.php -->
