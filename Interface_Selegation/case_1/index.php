<?php

require_once 'kubus.php';
require_once 'persegi.php';

$kubus = new Kubus();
$kubus->calculate_Volume();
echo "<br>";
$kubus->calculate_Area();

echo"<br>";
echo"<br>";
echo"<br>";

$persegi = new Persegi(1);
$persegi->calculate_Area();