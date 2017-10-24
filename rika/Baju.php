<?php
class Baju
{
    const HARGA = 100000;
    
    protected $pembeli = 'Rika';
    public $merk = 'api';
    public $warna = 'putih';
    private $pabrik = 'ponorogo';

    public function __construct()
    {
        echo "Merk  " . __CLASS__ . " sangat bagus! <br> ";
    }
    public function __destruct()
    {
        echo "Warna " . __CLASS__ . " tidak menarik! <br>";
    }
    public function getMerk()
    {
        return $this->merk . "<br>";
    }
    public function getWarna()
    {
        return $this->warna . "<br>";
    }
    public function showHarga()
    {
        return self::harga . "<br>";
    }

}

$baju1 = new Baju;

echo "Baju mereknya = " . $baju1 -> getMerk();
echo "Warnanya = " . $baju1 -> getWarna();
echo "Harganya = Rp. " . $baju1 -> showHarga();
