<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-3-summary</title>
</head>
<body>
    <h1>zadanie-3-summary</h1>
<?php

    $peopleCount = $_POST['peopleCount'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $account = $_POST['account-number'];
    $currentDate1 = date('d/m/y');
    $temp = explode('-', $_POST['date']);
    $plannedDate = date("d/m/y", mktime(0, 0, 0, $temp[2], $temp[1], $temp[0])); 
    $date = $_POST['date'];
    
    $smoking = isset($_POST['smoking']) ? 'Tak' : 'Nie';
    $kids = isset($_POST['kids']) ? 'Tak' : 'Nie';
    $airConditioning = isset($_POST['airConditioning']) ? 'Tak' : 'Nie';
    $jacuzzi = $_POST['jacuzzi'] ? 'Tak' : 'Nie';
    
    for($i = 0; $i < count($name); $i++){
        if(!preg_match("/^[A-Z][a-z]{1,}$/", $name[$i])){
            exit("Niepoprawne imie.<br> Dozwolone znaki od 'a' do 'z' zaczynajac od Duzej litery");
        }
    }
    for($i = 0; $i < count($surname); $i++){
        if(!preg_match("/^[A-Z][a-z]{1,}$/", $surname[$i])){
            exit("Niepoprawne nazwisko.<br> Dozwolone znaki od 'a' do 'z' zaczynajac od Duzej litery");
        }
    }
    if(!preg_match("/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/", $account)){
        exit("Niepoprawny numer konta.<br> Wymagany format 0000-0000-0000-0000");
    }
    if(strtotime($currentDate1) > strtotime($plannedDate)){
        exit("Nie ma mozliwości rezerwacji daty wstecz.");
    }

    echo 
    "<div>
        <table>
            <tr>
                <td colspan='2'>PODSUMOWANIE REZERWACJI</td>
            </tr>
            <tr>
                <td>Liczba osob</td>
                <td>$peopleCount</td>
            </tr>
            <tr>
                <td>Osoba rezerwojaca</td>
                <td>$name[0] $surname[0]</td>
            </tr>
            <tr>
                <td>email osoby rezerwojacej</td>
                <td>$email[0]</td>
            </tr>
            <tr>
                <td>Nr.konta</td>
                <td>$account</td>
            </tr>
            <tr>
                <td>Data przyjazdu</td>
                <td>$date</td>
            </tr>
            <tr>
                <td>Udogodnienia dla palacych</td>
                <td>$smoking</td>
            </tr>
            <tr>
                <td>Udogodnienia dla dziecka</td>
                <td>$kids</td>
            </tr>
            <tr>
                <td>Pomieszczenie klimatyzowane</td>
                <td>$airConditioning</td>
            </tr>
            <tr>
                <td>Pokoj z jacuzzi</td>
                <td>$jacuzzi</td>
            </tr>";
                for($i = 1; $i < $peopleCount; $i++){
                    echo "
                    <tr><td colspan='2'>TOWARZSZ $i</td></tr>
                    <tr>
                        <td>$name[$i] $surname[$i]</td>
                        <td>$email[$i]</td>
                    </tr>";
                }
            echo "
        </table>
    </div>";
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/part-1/zadanie-3.php -->
