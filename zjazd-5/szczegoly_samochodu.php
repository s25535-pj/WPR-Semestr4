<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <link type="text/css" rel="stylesheet" href="formating.css">
    <title>Szczegóły Samochodu</title>
</head>
<body>
    <div id="buttons">
        <form name="form" action="strona_glowna.php" method="POST">
        <input type="submit" name="powrot" value="Powrót"></form>
    </div>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "GET"){   
        $db_connection = mysqli_connect("localhost", "root", "", "mojabaza");
        
        if (!$db_connection) {
            exit("<h2>Błąd połączenia z bazą!</h2>");
        }
        
        $query["get_car"] = "SELECT * FROM samochody WHERE id=\"{$_GET["id_samochodu"]}\"";
        $result["get_car"] = mysqli_query($db_connection, $query["get_car"]);

        if (!$result["get_car"]) {
            exit("<h2>Błąd przy wykonywaniu zapytania!</h2>");
        }

        if (!mysqli_close($db_connection)) {
            exit("<h2>Błąd przy podczas zamykania połączenia z bazą!</h2>");
        }

        if(!mysqli_num_rows($result["get_car"]) == 0)
        {
            echo "<table>";
            echo "<tr>";
            echo "<th>Marka</th>";
            echo "<th>Model</th>";
            echo "<th>Cena</th>";
            echo "<th>Rok</th>";
            echo "<th>Opis</th>";
            echo "<th>Usuń samochód</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result["get_car"]))
            {
                echo "<tr>";
                echo "<td>{$row["marka"]}</td>";
                echo "<td>{$row["model"]}</td>";
                echo "<td>{$row["cena"]} zł</td>";
                echo "<td>{$row["rok"]}</td>";
                echo "<td>{$row["opis"]}</td>";     
                echo "<td><form name='usunSamochod' action='usun_samochod.php' method='GET'>";
                echo "<input type='text' name='id_samochodu' value='{$row["id"]}' hidden>";
                echo "<input type='submit' name='usun' value='Usuń Samochód'></form></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else { 
            echo "<h2>Brak wyników!</h2>";
        }
    }

    ?>
</body>
</html>