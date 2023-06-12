<?php
require_once('NoweAuto.php');

Class AutoZDodatkami extends NoweAuto { 
    private int $alarm;
    private int $radio;
    private int $klimatyzacja;

    public function __construct($model, $cenaWEuro, $kurs, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model, $cenaWEuro, $kurs);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;

    }

    public function obliczCene(){
        $cenaNowegoAuta = parent::obliczCene();
        return $cenaNowegoAuta + $this->alarm + $this->radio + $this->klimatyzacja;
    }
}
