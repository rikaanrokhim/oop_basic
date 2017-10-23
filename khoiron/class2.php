<?php

class Komputer
{
    public $user;
    protected $merk = "MSI";
    private $tempat = "Warnet";
    const waktu = 3;

    public function __construct($user)
    {
        $this->user = $user;
        echo $user." menekan tombol power komputer ".$this->merk;
    }

    public function nyala()
    {

        echo "\nSedang menyalakan Komputer ".$this->tempat."...";
        echo "\nKomputer dinyalakan dalam waktu ".self::waktu." detik\n";
    }

    public function mati()
    {
        return $this->user." mematikan Komputer...\n";
    }

    public function __destruct()
    {
        echo "Komputer didinginkan\n";
    }

}

echo "Masukkan nama anda : ";
$msi = new Komputer(trim(fgets(STDIN)));
echo $msi->nyala();
echo $msi->mati();
