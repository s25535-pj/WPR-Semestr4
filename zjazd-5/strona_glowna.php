<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <link type="text/css" rel="stylesheet" href="formating.css">
    <title>Strona główna</title>
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

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $db_connection = mysqli_connect("localhost", "root", "", "mojabaza");
    if (!$db_connection) {
        exit("<h2>Błąd połączenia z bazą!</h2>");
    }
    $query["list_cars"] = "SELECT * FROM samochody ORDER BY cena ASC LIMIT 5";
    $result["list_cars"] = mysqli_query($db_connection, $query["list_cars"]);
    
    if (!$result["list_cars"]) {
        exit("<h2>Błąd przy wykonywaniu zapytania!</h2>");
    }
    
    if (!mysqli_close($db_connection)) {
        exit("<h2>Błąd przy podczas zamykania połączenia z bazą!</h2>");
    }
    
    if(!mysqli_num_rows($result["list_cars"]) == 0)
    {
        echo "<table>";
        echo "<tr>";
        echo "<th>Marka </th>";
        echo "<th>Model </th>";
        echo "<th>Cena </th>";
        echo "<th>Rok </th>";
        echo "<th>Opis </th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result["list_cars"]))
        {
            echo "<tr>";
            echo "<td>{$row["marka"]}</td>";
            echo "<td>{$row["model"]}</td>";
            echo "<td>{$row["cena"]} zł</td>";
            echo "<td>{$row["rok"]}</td>";
            echo "<td>{$row["opis"]}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
        {
            echo "<h2>Brak wyników!</h2>";
        }
}
/*
    Baza:
        mysql -u root
        CREATE DATABASE mojabaza;
        USE mojabaza;
        CREATE TABLE samochody (id int PRIMARY KEY NOT NULL AUTO_INCREMENT, marka varchar(255), model varchar(255), cena int, rok int, opis varchar(255));
        INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ("Audi", "A4", 15000, 2005, "Opis audi A4");
        INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ("BMW", "M3", 20000, 2010, "Opis BMW M3");
        INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ("Toyota", "Supra", 30000, 1997, "Opis Toyoty Supry");

*/
?>
</body>
</html>