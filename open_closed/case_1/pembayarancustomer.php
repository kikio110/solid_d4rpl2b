<?php

require_once 'tipepembayaran.php';

class PembayaranCustomer{
    private $tipe;

    public function __construct(TipePembayaran $tipe) {
        $this->tipe = $tipe;
    }
    public function menerimaPembayaran (): void{
        $this->tipe->memprosesPembayaran();
    }
}