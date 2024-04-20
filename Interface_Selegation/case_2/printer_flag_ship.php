<?php
require_once 'fitur_cetak.php';
require_once 'fitur_scan.php';
require_once 'fitur_fax.php';

class Printer_Flagship implements Fitur_Cetak, Fitur_Scan, Fitur_Fax {
    public function cetakKertas(): void
    {
        echo "Mencetak dokumen dengan kertas dengan printer flagship ";
    }
    public function scanKertas(): void 
    {
        echo "Melakukan scan dokumen dengan printer flagship";
    }
    public function terimaFax(): void 
    {
        echo "Menerima fax melalui printer flagship";
    }
}