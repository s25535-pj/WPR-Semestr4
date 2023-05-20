<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <link type="text/css" rel="stylesheet" href="formating.css">
    <title>Dodaj Samochód</title>
</head>
<body>
    <div id="buttons">
        <form name="strona_glowna" action="strona_glowna.php" method="POST">
        <input type="submit" name="stronaGlowna" value="Strona glowna"></form>

        <form name="wszystkieSamochody" action=<?php echo $_SERVER["PHP_SELF"]?> method="POST">
        <input type="submit" name="wszystkieSamochody" value="Wszystkie samochody"></form>

        <form name="dodajSamochod" action="dodaj_samochod.php"method="POST">
        <input type="submit" name="dodajSamochod" value="Dodaj samochód"></form>
    </div>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $db_connection = mysqli_connect("localhost", "root", "", "mojabaza");
    if (!$db_connection) {
        exit("<h2>Błąd połączenia z bazą!</h2>");
    }
    $query["list_cars"] = "SELECT * FROM samochody ORDER BY rok DESC";
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
        echo "<th>Wyświetl szczegóły";
        echo "</tr>";
        while($row = mysqli_fetch_array($result["list_cars"]))
        {
            $id = $row["id"];
            echo "<tr>";
            echo "<td>{$row["marka"]}</td>";
            echo "<td>{$row["model"]}</td>";
            echo "<td>{$row["cena"]} zł</td>";
            echo "<td>{$row["rok"]}</td>";
            echo "<td>{$row["opis"]}</td>";
            echo "<td><form name='szczegolySamochodu' action='szczegoly_samochodu.php' method='GET'>";
            echo "<input type='text' name='id_samochodu' value='$id' hidden>";
            echo "<input type='submit' name='submit' value='Sczegóły'></form></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
        {
            echo "<h2>Brak wyników!</h2>";
        }
}
?>
</body>
</html>