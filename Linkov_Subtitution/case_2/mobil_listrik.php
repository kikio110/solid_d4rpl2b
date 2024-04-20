<?php

require_once 'kendaraan_listrik.php';

class Mobil_Listrik implements Kendaraan_Listrik {
    public function menggunakanBaterai(): void {
        echo "Menggunakan mobil listrik dengan baterai";
    }
}