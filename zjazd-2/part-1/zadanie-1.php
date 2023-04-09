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
    <form action="zadanie-1.php" method="GET">
        <table>
            <tr>
                <td>Pierwsza liczba</td>
                <td><input type="number" name="number1"></td>
                <td><input type="radio" name="operation" value="+" checked> (+) Dodaj</td>
                <td><input type="radio" name="operation" value="-"> (-) Odejmij</td>
            </tr>
            <tr>
                <td>Druga liczba</td>
                <td><input type="number" name="number2"></td>
                <td><input type="radio" name="operation" value="*"> (*) Pomnóż</td>
                <td><input type="radio" name="operation" value="/"> (/) Podziel</td>
            </tr>
            <tr>
                <td rowspan="4"><input type="submit" value="wynik"></td>
                <?php
                    if(isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['operation'])){
                        if(is_numeric($_GET['number1']) && is_numeric($_GET['number2'])){

                            $number1 = $_GET['number1'];
                            $number2 = $_GET['number2'];
                            $operation = $_GET['operation'];
                            
                            switch ($operation) {
                                case "+":
                                    $wynik = $number1 + $number2;
                                    break;
                                case "-":
                                    $wynik = $number1 - $number2;
                                    break;
                                case "*":
                                    $wynik = $number1 * $number2;
                                    break;
                                case "/":
                                    if($number2 != 0){
                                        $wynik = $number1 / $number2;
                                        break;
                                    } else {
                                        $wynik = "Nie dzielimy przez 0";
                                        break;
                                    }
                                }
                            echo "<td>$wynik</td>";
                        }
                    }
                ?>
            </tr>
        </table>
    </form>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/part-1/zadanie-1.php -->
