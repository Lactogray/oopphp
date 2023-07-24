<?php

require_once 'App/init.php';


// $produk1 = new Komik("Naruto", "Masasi Kishimoto", "Shonen Jump",  100000, 100 );
// $produk2 = new Game("One Piece", "Oda", "Gak Tau", 100000, 50 );

// $produk1->setDiskon(50);

// $cetakproduk = new CetakInfoProduk();

// $cetakproduk->tambahProduk($produk1);
// $cetakproduk->tambahProduk($produk2);

// echo $cetakproduk->cetak();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;
new ServiceUser();
echo "<br>";
new ProdukUser();