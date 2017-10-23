<?php 
class Mobil 
{
    
    /*
    * properties
    */
    
    public $merek = " Inova"; 
    public $jumlahRoda = " 4";
    public $harga = " 17.000.000"; 
    public $warna = " Hitam "; 
    
    //method construct
    public function __construct ()
    {
        // menampilkan pesan/ perintah merek mobil ini bermerek ...
        echo "Merek Mobil ini adalah " . __CLASS__ ;
      
    }
    // method destruct
    public function __destruct ()
    {
        echo " <br> Warna " . __CLASS__ . " kurang bagus ";
    }
    // method merek
    public function get_merek()
    {
        // mengambil value dari $merek
        return $this->merek;
    }
    public function get_jumlahRoda()
    {
        // mengambil value dari $jumlahRoda
        return $this->jumlahRoda;
    }
    public function get_harga()
    {
        // mengambil value dari $harga
        return $this->harga;
    }
    public function get_warna()
    {
        // mengambil value dari $warna
        return $this->warna;
    }

}

// membuat object
$Mobil1 = new Mobil();

//unset($Mobil1);

// menampilkan property 

echo   $Mobil1->get_merek() . "<br>";
echo "Mobil Beroda" . $Mobil1->get_jumlahRoda() . "<br>";
echo   "harga = Rp. " .$Mobil1->get_harga() . "<br>";
echo  "Warna ". $Mobil1->get_warna();
