<?php

class Komputer
{
    const waktu = 3;

    public function __construct()
    {
        echo "Menekan tombol power\n";
    }

    public function nyala()
    {
        echo "Sedang menyalakan Komputer...\n";
        echo "Komputer dinyalakan dalam waktu ".self::waktu." detik\n";
    }

    public function mati()
    {
        return "Mematikan Komputer...\n";
    }

    public function __destruct()
    {
        echo "Komputer didinginkan\n";
    }

}

$msi = new Komputer();
echo $msi->nyala();
echo $msi->mati();
