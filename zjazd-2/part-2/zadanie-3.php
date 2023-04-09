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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <table>
            <tr>
                <td colspan="3">Katalog <input type="text" name="catalogName"></td>
            </tr>
            <tr>
                <td colspan="3">Sciezka <input type="text" name="path" value="test_katalog/"></td>
            </tr>
            <tr>
                <td><input type="radio" name="operation" value="read" checked>read</td>
                <td><input type="radio" name="operation" value="create">create</td>
                <td><input type="radio" name="operation" value="delete">delete</td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Do it!"></td>
            </tr>
        </table>    
    </form>
    <?php
        function alterDirectory($path, $catalogName, $operation){

            
            switch($operation){
                case "read":
                    if(!file_exists($path)){
                        exit("Bledna sciezka $path");
                    }  
                    if(!file_exists($path.$catalogName)){
                        exit("Katalog $path$catalogName nie istnieje");
                    }
                    
                    $directory = opendir($path.$catalogName);
                    
                    echo "<table>";               
                    while(($file = readdir($directory)) !== false){
                        echo "<tr><td>$file</td></tr>";
                    }
                    
                    echo "Zawartosc ".$path.$catalogName."<br>";
                    echo "</table>";

                    closedir($directory);
                    break;
                    
                case "create":
                    if(!file_exists($path)){
                        exit("Bledna sciezka $path");
                    }
                    if(file_exists($path.$catalogName)){
                        exit("Katalog $path$catalogName juz istnieje");
                    }
                     
                    mkdir($path.$catalogName, 0755, false);
                    echo "Utworzono ".$path.$catalogName;
                    break;

                case "delete":
                    if(!file_exists($path)){
                        exit("Bledna sciezka $path");
                    }  
                    if(!file_exists($path.$catalogName)){
                        exit("Katalog $path$catalogName nie istnieje");
                    } 
                    if($path == "./test_katalog/" && $catalogName == ""){
                        exit("Operacja zablokowana. Nie kasujemy test_katalog");
                    }
                    
                    $directory = opendir($path);
                    $x = 0;
                    while(($file = readdir($directory)) !== false){
                        $x++;
                    }
                    if($x == 2){
                        rmdir($path.$catalogName);
                        echo "$path Skasowano";
                        closedir($directory);
                    } else {
                        closedir($directory);
                        exit("Katalog niepusty");
                    }
                    break;
            }
        }

        if(isset($_GET['path']) && isset($_GET['operation']) && isset($_GET['catalogName'])){
            
            $path = $_GET['path'];
            $catalogName = $_GET['catalogName'];
            $operaton = $_GET['operation'];

            if(substr($path, -1) != '/'){
                $path = $path.'/';
            }

            alterDirectory('./'.$path, $catalogName, $operaton);
        }
    ?>
</body>
</html>
<!-- Dla bezpieczeństa to zadanie jest zablokowane -->
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/part-2/zadanie-3.php -->
