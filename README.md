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

### private

Ketika sebuah property atau method di-set sebagai *private*, maka satu-satunya yang bisa mengakses adalah class itu sendiri. Class lain tidak bisa mengaksesnya, termasuk class turunan.
