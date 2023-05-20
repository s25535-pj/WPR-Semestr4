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

        <form name="form" action=<?php echo $_SERVER["PHP_SELF"]?> method="POST">
        <input type="submit" name="dodajSamochod" value="Dodaj samochód"></form>
    </div>

    <form name="form" action=<?php echo $_SERVER["PHP_SELF"]?> method="POST">
    <input type="submit" name="dodaj" value="Dodaj"></form>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Jestem dodaj samochód";
    }

    ?>
</body>
</html>