<?php
class Lingkaran
{


    private $jari;
    const phi = 3.14;

    public function __construct($jari)
    {
        $this->jari = $jari;
    }

    public function keliling()
    {
        $keliling = 2*self::phi*$this->jari;
        return "Lingkaran ini mempunyai keliling ".$keliling." cm\n";
    }

    public function luas()
    {
        $luas = self::phi*$this->jari*$this->jari;
        return "Lingkaran ini mempunyai luas ".$luas." cm\n";
    }

    public function __destruct()
    {
        echo "ingin menghitung lagi?(y/n)";
        $pernyataan = trim(fgets(STDIN));
        return $pernyataan;
    }

}

do {
    echo "Masukkan jari-jari lingkaran : ";

    $gambarLingkaran = new Lingkaran(trim(fgets(STDIN)));

    echo $gambarLingkaran->keliling();
    echo $gambarLingkaran->luas();
} while ($gambarLingkaran->__destruct()=='y');
