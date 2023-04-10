<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-3-reservationForm</title>
</head>
<body>
    <h1>zadanie-3-reservation form</h1>
    <form action="zadanie-3-summary.php" method="POST">
        <table>
            <tr>
                <td colspan="2">Podaj dane do zamowienia</td>
            </tr>
            <tr>
                <td>Imie</td>
                <td><input type="text" name="name[0]" placeholder="Roman" required></td>
            </tr>
            <tr>
                <td>Nazwisko</td>
                <td><input type="text" name="surname[0]" placeholder="Iksinski" required></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email[0]" placeholder="janNowak@gmail.com" required></td>
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
                <td colspan="2"><input type="submit" value="Dalej"></td>
            </tr>
        </table><br>
    <?php
        $peopleCount = $_POST['peopleCount'];
        for($i = 1; $i < $peopleCount; $i++){
            echo 
                "<table>
                    <tr>
                        <td colspan='2'>Towarzysz $i</td>
                    </tr>
                    <tr>
                        <td>Imie</td>
                        <td><input type='text' name='name[$i]' placeholder='Jan' required></td>
                    </tr>
                    <tr>
                        <td>Nazwisko</td>
                        <td><input type='text' name='surname[$i]' placeholder='Nowak' required></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><input type='email' name='email[$i]' placeholder='janNowak@gmail.com' required></td>
                    </tr>
                </table>";
        }
    ?>
        <input type="number" name="peopleCount" value="<?php echo $peopleCount ?>" hidden>
    </form>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/part-1/zadanie-3.php -->
