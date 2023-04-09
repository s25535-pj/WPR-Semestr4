<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="looks.css">
    <title>zadanie-4-skrypt</title>
</head>
<body>
    <h1>zadanie-4-skrypt</h1>
    <?php   
        if(isset($_GET['number'])){
            if($_GET['number'] >= 0){
                $number = $_GET['number'];
                $switch = 0;
                $x = 0;
                	if ($number == 0 || $number == 1){
                	  $switch = 1;
                	}
                	for ($i = 2; $i <= $number / 2; ++$i) {
                		$x++;
                	  if ($number % $i == 0) {
                		$switch = 1;
                		break;
                	  }
                	}
            	    if ($switch == 0){
            	    	echo "Liczba jest pierwsza<br>";
                        echo "Iteracje = $x. ";
            	    } else {
            	    	echo "Liczba nie jest pierwsza<br>";
                        echo "Iteracje = $x. ";
            	    }
            } else if ($_GET['number'] < 0) {
                echo "Liczba jest ujemna";
            }
            } else {
             echo "Nie podano liczby";
            }
    ?> 
</body>
</html>
<!-- http://szuflandia.pjwstk.edu.pl/~s25535/zadania-wprg/zjazd2/part-1/zadanie-4-skrypt.php -->
      