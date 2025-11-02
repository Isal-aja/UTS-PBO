<?php
class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function __construct($isijari = 1) {
        $this->jari = $isijari;
    }

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya adalah: {$rumus}";
    }
    
    public static function testing() {
        echo "ini dari static";
    }

    public function __destruct() {
        echo "udah ah capekkkk";
    }
}
$Lingkaran = new LuasLingkaran(5);
$Lingkaran->tampil('roda');
LuasLingkaran::testing();
?>