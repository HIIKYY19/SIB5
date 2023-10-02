<?php
require_once 'Bentuk2D.php';

// class Persegi Panjang
class PersegiPanjang extends B2D {
    private $panjang;
    private $lebar;
    
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function nBidang() {
        return "Persegi Panjang";
    }
    public function lBidang() {
        return $this->panjang * $this->lebar;
    }
    public function kBidang() {
        return 2 * ($this->panjang + $this->lebar);
    }
    public function keterangan() {
        return "Bisa menghitung luas atau keliling";
    }
}
 ?>
 