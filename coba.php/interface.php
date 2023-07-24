<?php

    interface InfoProduk {
     public function getInfoProduk(); 
}

 abstract class Produk {
    
protected $judul , 
       $penulis,
       $penerbit,
       $harga,
       $diskon = 0;

       
   

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }
        
        public function setJudul( $judul) {
            $this->judul = $judul;
        }


        public function getJudul() {
            return $this->judul;
        }

        public function setPenulis( $penulis) {
            $this->penulis = $penulis;
        }

        
        public function getPenulis() {
            return $this->penulis;
        }

        public function setPenerbit( $penerbit) {
            $this->penerbit = $penerbit;
        }

        
        public function getpenerbit() {
            return $this->penerbit;
        }

        public function setDiskon( $diskon ) {
            $this->diskon = $diskon;
        }

        public function getDiskon() {
            return $this->diskon;
        }

        public function setHarga( $harga) {
            $this->harga = $harga;
        }


        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

       public function getLabel() {
        return "$this->penulis, $this->penerbit";
       }

      abstract public function getInfo();
      
}



class Komik extends Produk implements InfoProduk {
    public $jmlhalaman;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0 ){

            parent::__construct($judul , $penulis, $penerbit, $harga );
            $this->jmlhalaman = $jmlhalaman;
    }

    public function getInfo()  {

        $str = "  {$this->judul}  | {$this->getLabel()} (Rp. {$this->getHarga()})";

        return $str;
    }

    
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }


 
    public function getInfoProduk(){
        $str = "Komik : " .  $this->getInfo()  . " ~ {$this->jmlhalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk implements InfoProduk {
    public $waktumain;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0 ){

            parent::__construct($judul, $penulis , $penerbit, $harga );
            $this->waktumain = $waktumain;
    }

    public function getInfo()  {

        $str = "  {$this->judul}  | {$this->getLabel()} (Rp. {$this->getHarga()})";

        return $str;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }


    public function getInfoProduk(){
        $str = "Game : " .  $this->getInfo()  . " ~ {$this->waktumain} Jam.";
        return $str; 
    }
}




class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk){
        $this->daftarProduk[] = $produk;
    }


    public function cetak( ) {
        $str = "DAFTAR PRODUK : <br> ";

        foreach( $this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masasi Kishimoto", "Shonen Jump",  100000, 100 );
$produk2 = new Game("One Piece", "Oda", "Gak Tau", 100000, 50 );

$produk1->setDiskon(50);

$cetakproduk = new CetakInfoProduk();

$cetakproduk->tambahProduk($produk1);
$cetakproduk->tambahProduk($produk2);

echo $cetakproduk->cetak();