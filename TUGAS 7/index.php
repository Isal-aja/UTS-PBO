<?php
//Memanggil file LuasLingkaran.php
require_once('./LuasLingkaran.php');
use app\math\LuasLingkaran;

$Lingkaran = new LuasLingkaran(5);
$Lingkaran->tampil('roda');
LuasLingkaran::testing();
?>