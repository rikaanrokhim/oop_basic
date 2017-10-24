# Property
Property (atau disebut juga dengan atribut) adalah data yang terdapat dalam sebuah class. property ini sebenarnya hanyalah variabel yang terletak di dalam class. Seluruh aturan dan tipe data yang biasa diinput kedalam variabel, bisa juga diinput kedalam property.
```PHP
class Keyboard
{
    public $merk;
    protected $harga;
    private $switch;
}
```

# Method
Method adalah aksi yang bisa dilakukan didalam class. Method merupakan function yang berada dalam class.
```PHP
class Lampu
{
    public function nyala()
    {
        //isi
    }
    public function mati()
    {
        //isi
    }
}
```

# Visibility
### Public

Ketika sebuah property atau method dinyatakan sebagai *public*, maka seluruh kode program yang berada di luar class bisa mengaksesnya, termasuk class turunan.

```PHP
class Identitas
{
    public nama = "Khoiron";
}
$kartu = new Identitas();
echo $kartu->nama;
```

### Protected

Ketika sebuah property atau method dinyatakan sebagai *protected*, maka property atau method tersebut tidak bisa diakses dari luar class, namun bisa diakses oleh class itu sendiri atau turunan class tersebut.
```PHP
class Komputer
{
   protected $jenisProcessor = "Intel Core i5 7200U";
}

class Laptop extends Komputer
{
   public function getProcessor() 
   {
     return $this->jenisProcessor;
   }
}
  
// buat objek dari class laptop
$laptopBaru = new Laptop();
  
// jalankan method
echo $laptopBaru->getProcessor(); 
// "Intel Core i5 7200U"
```

### Private

Ketika sebuah property atau method di-set sebagai *private*, maka satu-satunya yang bisa mengakses adalah class itu sendiri. Class lain tidak bisa mengaksesnya, termasuk class turunan.
```PHP
class Komputer {
   private $jenisProcessor = "Intel Core i5 7200U";
   
   public function getProcessor() 
   {
     return $this->jenisProcessor;
   }
}
  
class Laptop extends Komputer{
  
   public function getProcessor() 
   {
     return $this->jenisProcessor;
   }
}
  
// buat objek
$komputerBaru = new Komputer();
$laptopBaru = new Laptop();
  
// jalankan method dari class Komputer
echo $komputerBaru->getProcessor(); 
// "Intel Core i5 7200U"
  
// jalankan method dari class Laptop (error)
echo $laptopBaru->getProcessor();
// Notice: Undefined property: Laptop::$jenisProcessor
```

# Constant Object
Konstanta Class atau class constant adalah konstanta yang berada di dalam class. Selain memiliki property dan method, PHP juga membolehkan kita menggunakan konstanta yang berada di dalam class.
Class constant juga terikat kepada class, bukan objek. Oleh karena itu, untuk mengakses nilai konstanta, kita menggunakan operator yang sama seperti static property, yakni menggunakan double colon "::".
Penulisan :
```PHP
class Laptop
{
    const DOLLAR = 13000;
  
    // buat method dengan konstanta class Laptop
    public function beliLaptop($harga)
    {
      return "Beli Laptop Baru, Rp .".$harga * self::DOLLAR;
    }
}
  
// buat objek dari class Laptop
$laptopBaru = new Laptop();

echo $laptopBaru->beliLaptop(400);
```

# Constructor & Destructor
### Constructor

Constructor adalah fungsi khusus dalam sebuah class yang dipanggil saat sebuah object dibuat. Constructor tidak memiliki return value. Constructor biasa digunakan untuk mempersiapkan object seperti memberi nilai awal kepada atribute, memanggil member function dan beberapa proses lain.

Pada PHP, constructor dibuat dengan menggunakan nama fungsi:  `__construct()`
#### Sintax
```php
public function __construct()
{
    // Code yang akan dijalankan
}
```

#### Contoh Penggunaan Constructor
```php
// membuat class motor
class motor 
{
    public $merk = 'Honda';

    public function __construct() 
    {
        echo "Code class " . __CLASS__ . " dijalankan!<br />";
    }
}

$motorku = new motor;
```

###### hasil yang ditampilkan 
```php
Code class motor dijalankan!
```

### Destructor

Destructor adalah method khusus yang dijalankan secara otomatis pada saat sebuah objek dihapus. Di dalam PHP, seluruh objek secara otomatis dihapus ketika halaman PHP dimana objek itu berada selesai diproses. Tetapi kita juga dapat menghapus objek secara manual.
Destructor biasanya digunakan untuk membersihkan beberapa variabel, atau menjalankan proses tertentu sebelum objek dihapus.

Pada PHP, destructor dibuat dengan menggunakan nama fungsi: `__destructor()`

```php
public function __destruct() 
{
    echo "Kode sudah dihancurkan!";
}
```

