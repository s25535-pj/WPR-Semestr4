<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-4</title>
</head>
<body>
    <h1>zadanie-4</h1>
<?php
    
    $ipaddres =  $_SERVER['REMOTE_ADDR'];
    $found = false;
    $file = "./ipaddreses.txt";
    
    if(!is_file($file)){
        exit("File does not exist");
    }
    if(!$fileDescriptor = fopen($file, "r")){
    exit("Can not open the file");
    }

    $numberOfLines = count(file($file));
    while($numberOfLines > 0){
        $line = fgets($fileDescriptor);
        $line = rtrim($line, "\n\r"); // Usuń znak nowej lini z końca wiersza.
        // echo var_dump($ipaddres)." == ".var_dump($line)."<br>";
        if($ipaddres == $line){
            require("zadanie4-found.php");
            $found = true;
        }
        $numberOfLines--;
    }
    fclose($fileDescriptor);

    if(!$found){
        require("zadanie4-notfound.php");
    }
    echo "Current IP address = [ ".$ipaddres." ], ".$conditionalVariable." in file";

?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd3/zadanie4.php -->
