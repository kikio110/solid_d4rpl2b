<?php

require_once 'mobil.php';
require_once 'mobil_listrik.php';

$mobil = new Mobil();
$mobil->menggunakanBBM();
echo "<br>";
$mobilListrik = new Mobil_Listrik();
$mobilListrik->menggunakanBaterai();