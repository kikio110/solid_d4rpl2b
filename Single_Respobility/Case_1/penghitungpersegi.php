<?php

include_once 'persegi.php';

class Penghitung_Persegi extends Persegi {

    public function hitung_luas (Persegi $persegi) {
        return $persegi->getSisi() * $persegi->getSisi();
    }
}