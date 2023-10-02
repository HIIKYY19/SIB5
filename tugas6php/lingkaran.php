<?php
require_once 'Bentuk2D.php';

// Kelas Lingkaran
class Lingkaran extends B2D {
    public $jari2;
    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }
    public function nBidang() {
        return "Lingkaran";
    }
    public function lBidang() {
        return 3.14 * pow($this->jari2, 2);
    }
    public function kBidang() {
        return 2 * 3.14 * $this->jari2;
    }
    public function keterangan() {
        return "Bisa menghitung luas atau keliling";
    }
}

?>