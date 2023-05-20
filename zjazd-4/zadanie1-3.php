<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie1-3</title>
</head>
<body>
    <h1>zadanie1-3</h1>
    <?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION["names"] = $_POST["names"];
        $_SESSION["surnames"] = $_POST["surnames"];
        $_SESSION["emails"] = $_POST["emails"];
    }
    echo "<table><tr>
            <td colspan='2'>Dane organizatora</td>
        </tr>
        <tr>
            <td>Imie organizatora</td>
            <td>{$_SESSION['organisersName']}</td>
        </tr>
        <tr>
            <td>Nazwisko organizatora</td>
            <td>{$_SESSION['organisersSurname']}</td>
        </tr>
        <tr>
            <td>Email organizatora</td>
            <td>{$_SESSION['organisersEmail']}</td>
        </tr>
        <tr>
            <td>Numer konta organizatora</td>
            <td>{$_SESSION['account-number']}</td>
        </tr>";
    
    for($i = 0; $i < $_SESSION['peopleCount']; $i++){
        echo "<tr>";
        echo "<td colspan='2'>Towarzysz ".($i+1)."</td>";
        echo "</tr>
            <tr>
                <td>Imie</td>
                <td>{$_SESSION['names'][$i]}</td>
            </tr>
            <tr>
                <td>Nazwisko</td>
                <td>{$_SESSION['surnames'][$i]}</td>
            </tr>
            <tr>
                <td>email</td>
                <td>{$_SESSION['emails'][$i]}</td>
            </tr>";
    }
    echo "</table>"
    ?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd4/zadanie1-3.php -->
