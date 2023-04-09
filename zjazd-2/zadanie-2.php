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
    <form action="zadanie-2-skrypt.php" method="POST">
        <table>
            <tr>
                <td>Ilosc osob</td>
                <td><select name="people-count" required>
                    <option value="1">1 osoba</option>
                    <option value="2">2 osoby</option>
                    <option value="3">3 osoby</option>
                    <option value="4">4 osoby</option>
                </select></td>
            </tr>
            <tr>
                <td>Imie</td>
                <td><input type="text" name="name" placeholder="Jan" required></td>
            </tr>
            <tr>
                <td>Nazwisko</td>
                <td><input type="text" name="surname" placeholder="Nowak" required></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" placeholder="janNowak@gmail.com" required></td>
            </tr>
            <tr>
                <td>Nr.konta</td>
                <td><input type="text" name="account-number" placeholder="0000-0000-0000-0000" required></td>
            </tr>
            <tr>
                <td>Data przyjazdu</td>
                <td><input type="date" name="date" required></td>
            </tr>
            <tr>
                <td>Udogodnienia dla palacych</td>
                <td><input type="checkbox" name="smoking"></td>
            </tr>
            <tr>
                <td>Udogodnienia dla dziecka</td>
                <td><input type="checkbox" name="kids"></td>
            </tr>
            <tr>
                <td>Pomieszczenie klimatyzowane</td>
                <td><input type="checkbox" name="airConditioning" checked></td>
            </tr>
            <tr>
                <td>Pokoj z jacuzzi</td>
                <td><input type="radio" name="jacuzzi" value="yes">Tak
                <input type="radio" name="jacuzzi" value="no" checked>Nie</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Gotowe"></td>
            </tr>
        </table>
    </form>

    
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/zadanie-2.php -->
