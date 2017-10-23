<?php
// membuat class baju
class Baju
{
    // visibility dari class baju, dan propertinya
    protected $pembeli = 'Rika';
    public $merk = 'api';
    public $warna = 'putih';
    private $pabrik = 'ponorogo';
    // konstanta 
    const harga = 100000;

    // method construct
    public function __construct()
    {
        // keluarannya 
        echo "Merk  " . __CLASS__ . " sangat bagus! <br> ";
    }
    // method destruct
    public function __destruct()
    {
        // keluarannya
        echo "Warna " . __CLASS__ . " tidak menarik! <br>";
    }
    // method mangambil nilai $merk
    public function getMerk()
    {
        // merujuk ke dirinya sendiri bagian merk
        return $this->merk . "<br>";
    }
    // method mangambil nilai $warna
    public function getWarna()
    {
        // merujuk ke dirinya sendiri bagian warna
        return $this->warna . "<br>";
    }
    // method mengambil konstanta
    public function showHarga()
    {
        // merujuk kedirinya sendiri bagian konstanta
        // keyword "self" untuk mengakses konstanta didalam class
        return self::harga . "<br>";
    }

}

// membuat object
$baju1 = new Baju;

// menampilkan valuenya
echo "Baju mereknya = " . $baju1 -> getMerk();
echo "Warnanya = " . $baju1 -> getWarna();
echo "Harganya = Rp. " . $baju1 -> showHarga();