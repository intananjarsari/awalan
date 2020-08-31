<?php
class produk{
    public $namabarang,
           $merk,
           $harga;
           
           public function getcetak(){
               return "$this->namabarang, $this->merk, $this->harga";
           }
public function __construct($namabarang="namabarang", $merk="merk", $harga=0){
     $this->namabarang = $namabarang;
     $this->merk=$merk;
     $this->harga=$harga;    
}
    
}
$produk1 = new produk("Idepad 310", "Lenovo", 700000);
$produk2 = new produk("Flashdisk", "Sandisk", 100000);
$produk3 = new produk("Macbook Air", "Apple", 250000000);
$produk4 = new produk("Mouse", "Logitech", 1200000);

echo "Nama Barang Laptop : ". $produk1->getcetak();
echo "<br>";
echo "Nama Barang Aksesoris : " . $produk2->getcetak();
echo "<br>";
echo "Nama Barang Laptop : ". $produk3->getcetak();
echo "<br>";
echo "Nama Barang Aksesoris : " . $produk4->getcetak();
echo "<br>";
?>