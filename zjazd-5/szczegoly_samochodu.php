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
        <input type="submit" name="powrot" value="Powrót"></form>
    </div>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        echo "yes";
        echo array_values($_GET);
        
        echo var_dump($_GET['id']);
    }

    ?>
</body>
</html>