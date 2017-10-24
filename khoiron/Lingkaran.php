<?php
class Lingkaran
{
    const PHI = 3.14;
    protected $pernyataan;
    private $jari;

    public function __construct($jari)
    {
        $this->jari = $jari;
    }

    public function keliling()
    {
        $keliling = 2*self::PHI*$this->jari;
        return "Lingkaran ini mempunyai keliling ".$keliling." cm\n";
    }

    public function luas()
    {
        $luas = self::PHI*$this->jari*$this->jari;
        return "Lingkaran ini mempunyai luas ".$luas." cm\n";
    }

    public function pernyataan($pernyataan)
    {
        $this->pernyataan = $pernyataan;
        return $this->pernyataan;
    }

    public function __destruct()
    {
        echo "Penghitungan diakhiri\n";
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
