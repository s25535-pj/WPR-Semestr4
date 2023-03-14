<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta lang="pl">
<title>zadanie-1-3</title>
</head>
<body>

<?php
function censorSentence($sentence){
	$badWords = array("not","very","bad");
	$arraySentence = explode(" ", $sentence);
	foreach ($badWords as $word) {
		if($index = array_search($word, $arraySentence)) {
			$arraySentence[$index] = "***";
		}
	}
	$sentence = implode(" ",$arraySentence);
	return $sentence;
}

echo "Censored sentence: ".censorSentence("This is not very censored bad sentence");
?>
</body>
</html>
