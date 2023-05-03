<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-2</title>
</head>
<body>
    <h1>zadanie-2</h1>
<?php
    if(!isset($_COOKIE["visits"])){
        setcookie("visits", "1", time()+60*60*24*365, '/');
        $_COOKIE["visits"] = 1;
    }
    
    $number = $_COOKIE["visits"];
    setcookie("visits", $number + 1, time()+60*60*24*365, '/');
    echo "Number of visits = ".$_COOKIE["visits"];
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd4/zadanie2.php -->
