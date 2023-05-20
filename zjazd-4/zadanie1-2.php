<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie1-2</title>
</head>
<body>
    <h1>zadanie1-2</h1>
    <form action="zadanie1-3.php" method="POST">
        <table>
            <tr>
                <td colspan="2">Podaj dane towarzyszy</td>
                <?php
                session_start();
                $_SESSION['peopleCount'] = $_POST['peopleCount'];
                $_SESSION['organisersName'] = $_POST['organisersName'];
                $_SESSION['organisersSurname'] = $_POST['organisersSurname'];
                $_SESSION['organisersEmail'] = $_POST['organisersEmail'];
                $_SESSION['account-number'] = $_POST['account-number'];
                $peopleCount = $_POST['peopleCount'];
                    
                    for($i = 1; $i < $peopleCount+1; $i++){
                        echo 
                            "<tr>
                                <td colspan='2'>Towarzysz $i</td>
                            </tr>
                            <tr>
                                <td>Imie</td>
                                <td><input type='text' name='names[]'</td>
                            </tr>
                            <tr>
                                <td>Nazwisko</td>
                                <td><input type='text' name='surnames[]'td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td><input type='email' name='emails[]'</td>
                            </tr>";
                    }
                ?>
                <td colspan="2"><input type="submit" name="submit" value="Wyswietl podsumowanie"></td>
        </table><br>
    </form>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd4/zadanie1-2.php -->
