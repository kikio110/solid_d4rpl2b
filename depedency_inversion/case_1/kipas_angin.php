<?php

require_once 'barang_elektronik.php';

class Kipas_Angin implements BarangElektronik {
    public function berOperasi(): void {
    echo "Kipas menyala";
    }
    public function berHenti(): void {
        echo "Kipas padam";
    }
}