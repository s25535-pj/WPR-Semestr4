<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-1</title>
</head>
<body>
    <h1>zadanie-1</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <table>
            <tr>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Sprawdz"></td>
            </tr>
        </table>    
    </form>
    <?php
        function dayOfBirth($date) {
            return $date->format('l');
          }
          
          function getAge($date) {
            $currentDate = new DateTime();
            return date_diff($currentDate, $date)->y;
          }
          
          function getDaysTillNextBirthday($date) {
            $currentDate = new DateTime();
            $nextBirthday = $date->modify('+' . getAge($date) + 1 . ' years');
          
            return $currentDate->diff($nextBirthday)->days;
            
          }
          
          if (isset($_GET['date'])) {
            $date = DateTime::createFromFormat('Y-m-d', $_GET['date']);
          
            echo "Dzien tygodnia urodzin = ".dayOfBirth($date)."<br>";
            echo "Wiek = ".getAge($date)."<br>";
            echo "Dni do nastepnych urodzin = ".getDaysTillNextBirthday($date);
          }
    ?>
</body>
</html>
<!-- https://www.php.net/manual/en/datetime.modify.php -->
<!-- https://www.php.net/manual/en/datetime.createfromformat.php -->
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/part-2/zadanie-1.php -->
