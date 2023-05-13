<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-3</title>
</head>
<body>
    <h1>zadanie-3</h1>
<?php
    if(isset($_COOKIE['visits'])) {
      $visits = $_COOKIE['visits'] + 1;
    } else {
      $visits = 1;
    }

    // https://www.imperva.com/learn/performance/cache-control/
    if(isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0') {
      $visits--;
    }

    setcookie('visits', $visits, time()+60*60*24*365, '/');
    echo "Number of visits: " . $visits;
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd4/zadanie3.php -->
