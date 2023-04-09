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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="number">Podaj liczbe</label>
        <input type="number" name="number">
        <input type="submit" value="silnia"><br><br>
    </form>
    <?php
        function recrusive($number){
            if($number == 0){
                return 0;
            }
            if($number <= 1){
                return 1;
            }
            return $number*recrusive($number-1);
        }
        function notRecrusive($number){
            $result = 1;
            if($number == 0){
                return 0;
            }
            if($number <= 1){
                return 1;
            }
            while($number > 1){
                $result *= $number;
                $number--;
            }
            return $result;  
        }
        if(isset($_GET['number']) && is_numeric($_GET['number'])){
            $number = $_GET['number'];
            
            echo "<table><tr><td>Funkcja</td><td>Wynik</td><td>Czas wynonania</td>";
            $start_time1 = microtime(true);
            echo "<tr><td>Silnia rekurencyjne</td><td>".recrusive($number)."</td>";
            $end_time1 = microtime(true);
            $execution_time1 = ($end_time1 - $start_time1);
            echo "<td>".$execution_time1."</td>";

            $start_time2 = microtime(true);
            echo "<tr><td>Silnia nierekurencyjne</td><td>".notRecrusive($number)."</td>";
            $end_time2 = microtime(true);
            $execution_time2 = ($end_time2 - $start_time2);
            echo "<td>".$execution_time2."</td>";
            $winner = ($execution_time1 >= $execution_time2) ? "Silnia rekurencyjne" : "Silnia nierekurencyjne";
            $diff = abs($execution_time1 - $execution_time2);
            echo "<tr><td>Szybsza to ".$winner."</td><td colspan='2'>Roznica = ".$diff;
        }
    ?>
</body>
</html>

<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/part-2/zadanie-2.php -->
