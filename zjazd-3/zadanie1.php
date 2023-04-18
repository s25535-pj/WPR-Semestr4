<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-1</title>
</head>
<body>
    <h1>zadanie-1</h1>
    <form name="formularz" method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="zatwierdz" value="Wyślij plik">
</form>
<?php
    
    function printFileBackwards($file){
        $array = file($file);
        for($i = count($array) -1; $i >= 0; $i--){
            echo $array[$i] . '<br>';
        }
    }
 
    if(isset($_POST["zatwierdz"])){
        if(!isset($_FILES["file"])){
            exit();
        }
        $file = $_FILES["file"]["tmp_name"];
        printFileBackwards($file);
    }

?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd3/zadanie1.php -->
