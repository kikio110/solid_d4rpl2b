<?php

require_once 'kendaraan_bbm.php';

class Mobil implements Kendaraan_BBM {
    public function menggunakanBBM(): void
    {
        echo "Menggunakan mobil dengan bahan bakar minyak";
    }
}