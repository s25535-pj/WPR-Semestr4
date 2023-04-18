<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-3</title>
</head>
<body>
    <h1>zadanie-3</h1>
<?php
    
    $file = "./list.txt";
    if(!is_file($file)){
        exit("File does not exist");
    }
    
    if(!$fileDescriptor = fopen($file, "r")){
        exit("Can not open the file");
    }

    $numberOfLines = count(file($file));
    while($numberOfLines > 0){
        $line = fgets($fileDescriptor);
        $data = explode(";", $line);
        echo "<a href='$data[0]'>$data[1]</a><br>";
        $numberOfLines--;
    }

    fclose($fileDescriptor);
?>
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd3/zadanie3.php -->
