<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie1-1</title>
</head>
<body>
    <h1>zadanie1-1</h1>
    <form action="zadanie1-2.php" method="POST">
        <table>
            <tr>
                <td colspan="2">Podaj dane do zamowienia</td>
            </tr>
            <tr>
                <td>Ilosc osob dodatkowych</td>
                <td><select name="peopleCount" required>
                    <option value="1">1 osoba</option>
                    <option value="2">2 osoby</option>
                    <option value="3">3 osoby</option>
                    <option value="4">4 osoby</option>
                </select></td>
            </tr>
            <tr>
                <td>Imie organizatora</td>
                <td><input type="text" name="organisersName" value="Roman" required></td>
            </tr>
            <tr>
                <td>Nazwisko organizatora</td>
                <td><input type="text" name="organisersSurname" value="Iksinski" required></td>
            </tr>
            <tr>
                <td>Email organizatora</td>
                <td><input type="email" name="organisersEmail" value="janNowak@gmail.com" required></td>
            </tr>
            <tr>
                <td>Nr.konta organizatora</td>
                <td><input type="text" name="account-number" value="0000-0000-0000-0000" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Dalej"></td>
            </tr>
        </table><br>
    </form>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd4/zadanie1-1.php -->
