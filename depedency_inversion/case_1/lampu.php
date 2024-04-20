<?php

require_once 'barang_elektronik.php';

class Lampu implements BarangElektronik {
    public function berOperasi(): void {
    echo "Lampu menyala";
    }
    public function berHenti(): void
    {
        echo "lampu Mati";
    }
}