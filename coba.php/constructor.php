<?php


class Produk {
    
public $judul = "judul", 
       $penulis ="penulis",
       $penerbit ="penerbit",
       $harga = "harga";

        public function __construct( $judul, $penulis, $penerbit, $harga){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

       public function getLabel() {
        return "$this->judul $this->penulis";
       }

}



$produk1 = new Produk("Naruto", "Masasi Kishimoto", "Shonen Jump", "Rp. 125.000");


$produk2 = new Produk("One Piece", "Oda", "Gak Tau", "100.000 Juta" );

$produk3 = new

echo "Komik  : " . $produk1->getLabel();
echo "<br>";
echo "Game   : " . $produk2->getLabel();


