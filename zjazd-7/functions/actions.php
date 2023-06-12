<?php
require_once('../classes/NoweAuto.php');
require_once('../classes/AutoZDodatkami.php');
require_once('../classes/Ubezpieczenie.php');


// model, cena, kurs, radio, alarm, klimatyzacja, procentowa wartość ubezpieczenia, liczbaLatPosiadaniaAuta

$cenaWEuro = 10000;
$kurs = 4;
$cenaRadia = 800;
$cenaAlarmu = 300;
$cenaKlimatyzacji = 1500;
$procentoweUbezpieczenie = 100;
$liczbaLatPosiadaniaAuta = 5;

$noweAuto = new NoweAuto("Model auta", $cenaWEuro, $kurs);
$autoZDodatkami = new AutoZDodatkami("Model auta z dodatkami", $cenaWEuro, $kurs, $cenaRadia, $cenaAlarmu, $cenaKlimatyzacji);
$ubezpieczenie = new Ubezpieczenie("Ubezpieczenie", $cenaWEuro, $kurs, $cenaRadia, $cenaAlarmu, $cenaKlimatyzacji, $procentoweUbezpieczenie, $liczbaLatPosiadaniaAuta);

$cenaNoweAuto = $noweAuto->obliczCene();
$cenaAutoZDodatkami = $autoZDodatkami->obliczCene();
$cenaUbezpieczenie = $ubezpieczenie->obliczCene();

echo "Cena w euro: ". $cenaWEuro. "<br>";
echo "noweAuto: ". $cenaNoweAuto. "<br>";
echo "autoZDodatkami: ". $cenaAutoZDodatkami. "<br>";
echo "ubezpieczenie: ". $cenaUbezpieczenie. "<br>";
