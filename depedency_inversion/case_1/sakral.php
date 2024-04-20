<?php

require_once 'barang_elektronik.php';

class Sakral {
    private BarangElektronik $item;
    private bool $keaktifan = false;

    public function __construct(BarangElektronik $item) {
        $this->item = $item;
    }
    public function berubah(): void {
        $this->keaktifan = !$this->keaktifan;
    }
}