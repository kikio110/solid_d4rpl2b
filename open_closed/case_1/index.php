<?php

require_once 'cash.php';
require_once 'debit.php';
require_once 'kredit.php';
require_once 'pembayarancustomer.php';

$cash = new Cash();
$car = new PembayaranCustomer($cash);
$car->menerimaPembayaran($cash);