<?php
require_once 'fitur_cetak.php';
require_once 'fitur_scan.php';

class Printer_Mid_Range implements Fitur_Cetak, Fitur_Scan {
    public function cetakKertas(): void {
      echo "Mencetak dokumen dengan kertas HVS dengan printer mid range";
    }
    public function scanKertas(): void {
        echo "Melakukan scan dokumen dengan printer mid range";
    }
}