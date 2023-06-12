<?php
require_once('NoweAuto.php');
require_once('AutoZDodatkami.php');

Class Ubezpieczenie extends AutoZDodatkami{
    private float $procentowaWartoscUbezpieczenia;
    private int $liczbaLatPosiadaniaSamochodu;

    public function __construct($modelAuta, $cenaWEuro, $kurs, $alarm, $radio, $klimatyzacja, $procentowaWartoscUbezpieczenia, $liczbaLatPosiadaniaSamochodu) {
        parent::__construct($modelAuta, $cenaWEuro, $kurs, $alarm, $radio, $klimatyzacja);
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia;
        $this->liczbaLatPosiadaniaSamochodu = $liczbaLatPosiadaniaSamochodu;
    }

    public function obliczCene() {
        $wartoscSamochoduZDodatkami = parent::obliczCene();
        $wartoscUbezpieczenia = ($this->procentowaWartoscUbezpieczenia * ($wartoscSamochoduZDodatkami * ((100 - $this->liczbaLatPosiadaniaSamochodu) / 100)));
        return $wartoscUbezpieczenia;
    }
}