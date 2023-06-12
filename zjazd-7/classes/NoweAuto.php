<?php
Class NoweAuto {
    private string $model;
    private int $cenaWEuro;
    private int $kurs;

    public function __construct($model, $cenaWEuro, $kurs) {
        $this->model = $model;
        $this->cenaWEuro = $cenaWEuro;
        $this->kurs = $kurs;
    }

    public function obliczCene(){
        return $this->cenaWEuro * $this->kurs;
    }
}
