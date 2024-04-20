<?php
require_once 'fitur_cetak.php';
class Printer_Entry_Level implements Fitur_Cetak {
    public function cetakKertas(): void {
    echo "Mencetak dokumen dengan kertas HVS menggunakan printer entry level";
    }
}