<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-2</title>
</head>
<body>
    <h1>zadanie-2</h1>
<?php

    $file = "./licznik.txt";
    if(!is_file($file)){
        file_put_contents($file, 0);
    }
    
    if(!$fileDescriptor = fopen($file, "r+")){
        exit("Can not ope the file");
    }

        $numberOfvisits = fgets($fileDescriptor);
        rewind($fileDescriptor);      
        $numberOfvisits++;    
        
        fwrite($fileDescriptor, $numberOfvisits);
        rewind($fileDescriptor);
        
        echo "Visits = ".fgets($fileDescriptor);
        fclose($fileDescriptor);

?>
</body>
</html>
<!-- Na szuflandi nie dam praw do zapisu więc program wyrzuci że nie można otworzyć pliku -->
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd3/zadanie2.php -->
