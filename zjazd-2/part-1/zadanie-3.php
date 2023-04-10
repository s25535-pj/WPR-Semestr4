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
    <form action="zadanie-3-reservationForm.php" method="POST">
        <table>     
            <tr>
                <td>Dla ilu osob ma byc rezerwacja</td>
                <td><select name="peopleCount" required>
                    <option value="1">1 osoba</option>
                    <option value="2">2 osoby</option>
                    <option value="3">3 osoby</option>
                    <option value="4">4 osoby</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Dalej"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/part-1/zadanie-3.php -->
