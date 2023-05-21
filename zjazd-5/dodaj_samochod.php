<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <link type="text/css" rel="stylesheet" href="formating.css">
    <title>Dodaj Samochód</title>
</head>
<body>
    <div id="buttons">
        <form name="form" action="strona_glowna.php" method="POST">
        <input type="submit" name="stronaGlowna" value="Strona glowna"></form>

        <form name="form" action="wszystkie_samochody.php" method="POST">
        <input type="submit" name="wszystkieSamochody" value="Wszystkie samochody"></form>

        <form name="form" action="dodaj_samochod.php" method="POST">
        <input type="submit" name="dodajSamochod" value="Dodaj samochód"></form>
    </div>

    <table>
        <form name="form" action=<?php echo $_SERVER["PHP_SELF"]?> method="POST">
            <tr>
                <td>Marka</td>
                <td><input type="text" name="marka" required></td>
            </tr>
            <tr>
                <td>Model</td>
                <td><input type="text" name="model" required></td>
            </tr>
            <tr>
                <td>Cena</td>
                <td><input type="number" name="cena" required></td>
            </tr>
            <tr>
                <td>Rok</td>
                <td><input type="number" name="rok" required></td>
            </tr>
            <tr>
            <td colspan="2">
                <label for="opis">Opis</label></p>
                <textarea id="opis" name="opis" rows="4" cols="50" placeholder="Krótki opis" required></textarea>
            </td>
            </tr>
                <td colspan="2"><input type="submit" name="dodaj" value="Dodaj"></td>
            </tr>
        </form>
    </table>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["dodaj"])){  
        $db_connection = mysqli_connect("localhost", "root", "", "mojabaza");
        if (!$db_connection) {
            exit("<h2>Błąd połączenia z bazą!</h2>");
        }
        
        $query["add_car"] = "INSERT INTO samochody (marka, model, cena, rok, opis) 
                            VALUES (\"{$_POST["marka"]}\", \"{$_POST["model"]}\",
                             \"{$_POST["cena"]}\", \"{$_POST["rok"]}\", \"{$_POST["opis"]}\")";
        
        $result["add_car"] = mysqli_query($db_connection, $query["add_car"]);

        if($result["add_car"]){
            echo "<h2>Auto dodano pomyślnie</h2>";
        } else {
            echo "<h2>Błąd podczas dodawania auta</h2>";
        }

        if (!mysqli_close($db_connection)) {
            exit("<h2>Błąd przy podczas zamykania połączenia z bazą!</h2>");
        }
    }

    ?>
</body>
</html>