<?php

// Temel Sekil sınıfı
class Sekil {
    // Alan ve çevre hesaplama metodları boş, çünkü her şekil özel hesaplamalar yapacak
    public function alan() {
        return 0;
    }

    public function cevre() {
        return 0;
    }
}

// Dikdortgen sınıfı
class Dikdortgen extends Sekil {
    private $kisaKenar;
    private $uzunKenar;

    // Yapıcı metod
    public function __construct($kisaKenar, $uzunKenar) {
        $this->kisaKenar = $kisaKenar;
        $this->uzunKenar = $uzunKenar;
    }

    // Alan hesaplama
    public function alan() {
        return $this->kisaKenar * $this->uzunKenar;
    }

    // Çevre hesaplama
    public function cevre() {
        return 2 * ($this->kisaKenar + $this->uzunKenar);
    }
}

// Ucgen sınıfı
class Ucgen extends Sekil {
    private $kenar1;
    private $kenar2;
    private $kenar3;

    // Yapıcı metod
    public function __construct($kenar1, $kenar2, $kenar3) {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
    }

    // Alan hesaplama (Herhangi bir üçgen için alan hesaplaması)
    public function alan() {
        $s = ($this->kenar1 + $this->kenar2 + $this->kenar3) / 2; // Yarı çevre
        return sqrt($s * ($s - $this->kenar1) * ($s - $this->kenar2) * ($s - $this->kenar3)); // Heron Formülü
    }

    // Çevre hesaplama
    public function cevre() {
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }
}

// Kare sınıfı
class Kare extends Sekil {
    private $kenar;

    // Yapıcı metod
    public function __construct($kenar) {
        $this->kenar = $kenar;
    }

    // Alan hesaplama
    public function alan() {
        return $this->kenar * $this->kenar;
    }

    // Çevre hesaplama
    public function cevre() {
        return 4 * $this->kenar;
    }
}

// Test - Şekillerin alan ve çevrelerini hesaplayalım
$dikdortgen = new Dikdortgen(4, 6);
echo "Dikdörtgen - Alan: " . $dikdortgen->alan() . ", Çevre: " . $dikdortgen->cevre() . "<br>";

$ucgen = new Ucgen(3, 4, 5);
echo "Üçgen - Alan: " . $ucgen->alan() . ", Çevre: " . $ucgen->cevre() . "<br>";

$kare = new Kare(5);
echo "Kare - Alan: " . $kare->alan() . ", Çevre: " . $kare->cevre() . "<br>";

?>
