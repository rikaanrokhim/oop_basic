<?php
class Lingkaran
{

    private $jari;
    protected $pernyataan;
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

    public function pernyataan($pernyataan)
    {
        $this->pernyataan = $pernyataan;
        return $this->pernyataan;
    }

    public function __destruct()
    {
        echo "\nPenghitungan diakhiri";
    }

}

do {
    unset($gambarLingkaran);
    echo "Masukkan jari-jari lingkaran : ";
    $gambarLingkaran = new Lingkaran(trim(fgets(STDIN)));

    echo $gambarLingkaran->keliling();
    echo $gambarLingkaran->luas();
    echo "ingin menghitung lagi?(y/n)";
} while ($gambarLingkaran->pernyataan(trim(fgets(STDIN)))=='y');
