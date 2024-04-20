<?php

require_once 'whatsapp.php';
require_once 'instagram.php';

$whatsapp = new Whatsapp();
$whatsapp->chat();
echo"<br>";
$whatsapp->callGroupVideo();
echo"<br>";
$whatsapp->sendPhotosandVideos();

echo"<br>";
echo"<br>";
echo"<br>";

$intagram = new Instagram();
$intagram->chat();
echo"<br>";
$intagram->sendPhotosandVideos();
echo"<br>";
$intagram->publishPost();