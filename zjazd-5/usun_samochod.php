<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <link type="text/css" rel="stylesheet" href="formating.css">
    <title>Usuń Samochód</title>
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
    <?php

    if($_SERVER["REQUEST_METHOD"] == "GET"){  
        $db_connection = mysqli_connect("localhost", "root", "", "mojabaza");
        if (!$db_connection) {
            exit("<h2>Błąd połączenia z bazą!</h2>");
        }
        
        $query["delete_car"] = "DELETE FROM samochody WHERE id=\"{$_GET["id_samochodu"]}\"";
        $result["delete_car"] = mysqli_query($db_connection, $query["delete_car"]);

        if($result["delete_car"]){
            echo "<h2>Auto usunięto pomyślnie</h2>";
        } else {
            echo "<h2>Błąd podczas usówania auta</h2>";
        }

        if (!mysqli_close($db_connection)) {
            exit("<h2>Błąd przy podczas zamykania połączenia z bazą!</h2>");
        }
    }

    ?>
</body>
</html>