<?php 
class Kipas 
{
    
    /*
    * properties
    */
    public $merek = " Cosmos "; 
    public $harga = " 200.000 "; 
    public $warna = " Putih "; 
    
    // method constructor
    public function __construct()
    {
        // code yang akan dijalankan
        echo "Merek Kipas adalah " . __CLASS__ ;
    }
    // method destructor
    public function __destruct()
    {
        echo " <br> Harga ". __CLASS__ . " terlalu mahal";
    }
    // method merek
    public function get_merek()
    {
        // mengambil value dari $merek 
        return $this->merek;
    }
    //method harga
    public function get_harga()
    {
        // mengambil value dari $harga
        return $this->harga;
    }
    //method warna
    public function get_warna()
    {
        // mengambil value dari $warna
        return $this->warna;
    }
}

// membuat object kipas
$Kipas1 = new Kipas();

// unset($Kipas1);

// menampilkan property
echo   $Kipas1->get_merek() . "<br>";
echo   "Harganya Rp. " .$Kipas1->get_harga() . "<br>";
echo  "Warna ". $Kipas1->get_warna();
