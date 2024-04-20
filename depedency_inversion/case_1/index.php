<?php

require_once 'sakral.php';
require_once 'kipas_angin.php';
require_once 'lampu.php';

$lampu = new Lampu();
$kipas = new Kipas_Angin();

$sakral = new Sakral($lampu);
$lampu->berOperasi();
$lampu->berHenti();
$sakral->berubah(); 

$sakral = new Sakral($kipas);
$kipas->berOperasi();
$kipas->berHenti();
$sakral->berubah();
?>

