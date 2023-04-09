<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-2-skrypt</title>
</head>
<body>
    <h1>zadanie-2-skrypt</h1>
<?php

    $peopleCount = $_POST['people-count'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $account = $_POST['account-number'];
    
    if(!preg_match("/^[A-Z][a-z]{1,}$/", $name)){
        echo "Niepoprawne imie.<br> Dozwolone znaki od 'a' do 'z' zaczynajac od Duzej litery";
        exit;
    }
    if(!preg_match("/^[A-Z][a-z]{1,}$/", $surname)){
        echo "Niepoprawne nazwisko.<br> Dozwolone znaki od 'a' do 'z' zaczynajac od Duzej litery";
        exit;
    }
    if(!preg_match("/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/", $account)){
        echo "Niepoprawny numer konta.<br> Wymagany format 0000-0000-0000-0000";
        exit;
    }

    $currentDate1 = date('d/m/y');
    $temp = explode('-', $_POST['date']);
    $plannedDate = date("d/m/y", mktime(0, 0, 0, $temp[2], $temp[1], $temp[0])); 

    if(strtotime($currentDate1) > strtotime($plannedDate)){
        echo "Nie ma mozliwości rezerwacji daty wstecz.";
        exit;
    }

    $date = $_POST['date'];
    $smoking = isset($_POST['smoking']) ? 'Tak' : 'Nie';
    $kids = isset($_POST['kids']) ? 'Tak' : 'Nie';
    $airConditioning = isset($_POST['airConditioning']) ? 'Tak' : 'Nie';
    $jacuzzi = $_POST['jacuzzi'] ? 'Tak' : 'Nie';

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
                <td>$name $surname</td>
            </tr>
            <tr>
                <td>email osoby rezerwojacej</td>
                <td>$email</td>
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
            </tr>
        </table>
    </div>";
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/part-1/zadanie-2-skrypt.php -->
