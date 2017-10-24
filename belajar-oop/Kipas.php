<?php 
class Kipas 
{
    
    /*
    * properties
    */
    public $merek = " Cosmos "; 
    public $harga = " 200.000 "; 
    public $warna = " Putih "; 
    
    /* 
    * method constructor
    */
    public function __construct()
    {
        /* 
        * code yang akan dijalankan
        */
        echo "Merek Kipas adalah " . __CLASS__ ;
    }
    /*
    * method destructor
    */
    public function __destruct()
    {
        echo " <br> Harga ". __CLASS__ . " terlalu mahal";
    }
    /*
    * method merek
    */
    public function getMrek()
    {
        /* 
        * mengambil value dari $merek 
        */
        return $this->merek;
    }
    /*
    * method harga
    */
    public function getHarga()
    {
        /*
        * mengambil value dari $harga
        */
        return $this->harga;
    }
    /*
    * method warna
    */
    public function getWarna()
    {
        /*
        * mengambil value dari $warna
        */
        return $this->warna;
    }
}

/* 
* membuat object kipas
*/
$Kipas1 = new Kipas();

// unset($Kipas1);

/*
* menampilkan property
*/
echo   $Kipas1->getMerek() . "<br>";
echo   "Harganya Rp. " .$Kipas1->getHarga() . "<br>";
echo  "Warna ". $Kipas1->getWarna();
