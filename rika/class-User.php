<?php
// membuat class user
class User
{
    // visibility dari class user, dan propertinya
    protected $nama = 'Rika';
    public $username = 'rika';
    public $email = 'rikaanrokhim@gmail.co';
    private $alamat = 'ponorogo';
    // konstanta
    const id = 105;

    // method construct
    public function __construct()
    {
        // keluarannya
        echo "Username " . __CLASS__ . " valid! <br> ";
    }
    // method destruct
    public function __destruct()
    {
        // keluarannya
        echo "Email " . __CLASS__ . " tidak valid! <br>";
    }
    // method mangambil nilai $username
    public function getUsername()
    {
        // merujuk ke dirinya sendiri bagian username
        return $this->username . "<br>";
    }
    // method mangambil nilai $email
    public function getEmail()
    {
        // merujuk ke dirinya sendiri bagian email
        return $this->email . "<br>";
    }
    public function showConstant()
    {
        // merujuk kedirinya sendiri bagian konstanta
        // keyword "self" untuk mengakses konstanta didalam class
        return self::id . "<br>";
    }

}

// membuat object
$user1 = new User;

// menampilkan valuenya
echo "Usernamenya = " . $user1 -> getUsername();
echo "Emailnya = " . $user1 -> getEmail();
echo "ID = " . $user1 -> showConstant();