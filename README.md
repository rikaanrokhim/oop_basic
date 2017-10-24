### public

Ketika sebuah property atau method dinyatakan sebagai *public*, maka seluruh kode program yang berada di luar class bisa mengaksesnya, termasuk class turunan.

```PHP
class Identitas
{
    public nama = "Khoiron";
}
$kartu = new Identitas();
echo $kartu->nama;
```

### protected

Ketika sebuah property atau method dinyatakan sebagai *protected*, maka property atau method tersebut tidak bisa diakses dari luar class, namun bisa diakses oleh class itu sendiri atau turunan class tersebut.
```PHP
class Komputer
{
   protected $jenisProcessor = "Intel Core i5 7200U";
}

class Laptop extends Komputer
{
   public function tampilkanProcessor() 
   {
     return $this->jenisProcessor;
   }
}
  
// buat objek dari class laptop
$laptopBaru = new Laptop();
  
// jalankan method
echo $laptopBaru->tampilkanProcessor(); 
// "Intel Core i5 7200U"
```

### private

Ketika sebuah property atau method di-set sebagai *private*, maka satu-satunya yang bisa mengakses adalah class itu sendiri. Class lain tidak bisa mengaksesnya, termasuk class turunan.
```PHP
class Komputer {
   private $jenisProcessor = "Intel Core i5 7200U";
   
   public function tampilkanProcessor() 
   {
     return $this->jenisProcessor;
   }
}
  
class Laptop extends Komputer{
  
   public function tampilkanProcessor() 
   {
     return $this->jenisProcessor;
   }
}
  
// buat objek
$komputerBaru = new Komputer();
$laptopBaru = new Laptop();
  
// jalankan method dari class Komputer
echo $komputerBaru->tampilkanProcessor(); 
// "Intel Core i5 7200U"
  
// jalankan method dari class Laptop (error)
echo $laptopBaru->tampilkanProcessor();
// Notice: Undefined property: Laptop::$jenisProcessor
```

### Constructor

Constructor adalah fungsi khusus dalam sebuah class yang dipanggil saat sebuah object dibuat. Constructor tidak memiliki return value. Constructor biasa digunakan untuk mempersiapkan object seperti memberi nilai awal kepada atribute, memanggil member function dan beberapa proses lain.

Pada PHP, constructor dibuat dengan menggunakan nama fungsi:  `__construct()`

### Destructor

Destructor adalah method khusus yang dijalankan secara otomatis pada saat sebuah objek dihapus. Di dalam PHP, seluruh objek secara otomatis dihapus ketika halaman PHP dimana objek itu berada selesai diproses. Tetapi kita juga dapat menghapus objek secara manual.
Destructor biasanya digunakan untuk membersihkan beberapa variabel, atau menjalankan proses tertentu sebelum objek dihapus.

Pada PHP, destructor dibuat dengan menggunakan nama fungsi: `__destructor()`
