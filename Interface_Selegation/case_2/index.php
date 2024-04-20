<?php

require_once 'printer_entry_level.php';
require_once 'printer_mid_range.php';
require_once 'printer_flag_ship.php';

$printerV1 = new Printer_Entry_Level();
$printerV1->cetakKertas();
echo "<br>";
echo "<br>";
$printerV2 = new Printer_Mid_Range();
$printerV2->cetakKertas();
echo "<br>";
$printerV2->scanKertas();
echo "<br>";
echo "<br>";
$printerV3 = new Printer_Flagship();
$printerV3->cetakKertas();
echo "<br>";
$printerV3->scanKertas();
echo "<br>";
$printerV3->terimaFax();