<?php
require_once 'Bentuk2D.php';

// Kelas Segitiga
class Segitiga extends B2D {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function nBidang() {
        return "Segitiga";
    }
    public function lBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }
    public function kBidang() {
        return "Keliling segitiga tidak bisa dihitung tanpa sisi";
    }
    public function keterangan() {
        return "Bisa menghitung luas";
    }
}
?>