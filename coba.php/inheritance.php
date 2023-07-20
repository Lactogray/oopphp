<?php


class Produk {
    
public $judul , 
       $penulis,
       $penerbit,
       $harga,
       $jmlhalaman,
       $waktumain;
   

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0,  ){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlhalaman = $jmlhalaman;
            $this->waktumain = $waktumain;

        }

       public function getLabel() {
        return "$this->penulis, $this->penerbit";
       }


       public function getInfoProduk() {
        // Komik : Naruto  | Masashi Kishimot, Shoonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul}  | {$this->getLabel()} (Rp. {$this->harga})";
        
        if( $this->tipe == "Komik"){
            $str .= " - {$this->jmlhalaman} Halaman.";
        }else if ( $this->tipe == "Game"){
            $str .= " ~ {$this->waktumain} Jam";
        }
        return $str;
    }
}



class Komik extends Produk {
    public function getInfoProduk(){
        $str = "Komik : {$this->judul}  | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk {
    public function getInfoProduk(){
        $str = "Game : {$this->judul}  | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktumain} Jam.";
        return $str;
    }
}




class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul}  | {$produk->getLabel()}  (Rp.  {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masasi Kishimoto", "Shonen Jump", "Rp. 125.000", 100, 0, "Komik");


$produk2 = new Game("One Piece", "Oda", "Gak Tau", "100.000 Juta", 0, 50, "Game" );


echo $produk1->getInfoProduk();

echo "<br>";

echo $produk2->getInfoProduk();