<?php


class Produk {
    
public $judul = "judul", 
       $penulis,
       $penerbit,
       $harga;


       public function getLabel() {
        return "$this->judul $this->penulis";
       }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "titit";
// $produk2->tambah = "kkk";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi  Kishimoto";
$produk3->penerbit = " Shonen";
$produk3->harga = "RP.100.000";

// var_dump($produk3);

// echo "Komik : $produk3->judul, $produk3->penulis";

// echo "<br>";

// echo $produk3->getLabel();


// echo "<br>";

$produk4 = new Produk();

$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik  : " . $produk3->getLabel();
echo "<br>";
echo "Game   : " . $produk4->getLabel();


