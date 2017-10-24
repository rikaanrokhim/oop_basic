<?php

class User
{
    const ID = 105;
    
    protected $nama = 'Rika';
    public $username = 'rika';
    public $email = 'rikaanrokhim@gmail.co';
    private $alamat = 'ponorogo';

    public function __construct()
    {
        echo "Username " . __CLASS__ . " valid! <br> ";
    }
    public function __destruct()
    {
        echo "Email " . __CLASS__ . " tidak valid! <br>";
    }
    public function getUsername()
    {
        return $this->username . "<br>";
    }
    public function getEmail()
    {
        return $this->email . "<br>";
    }
    public function showConstant()
    {
        return self::ID . "<br>";
    }

}

$user1 = new User;

echo "Usernamenya = " . $user1 -> getUsername();
echo "Emailnya = " . $user1 -> getEmail();
echo "ID = " . $user1 -> showConstant();
