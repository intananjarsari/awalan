<?php
class mobil{
    public $nama, $merk, $warga, $kecepatanmaksimal, $jumlahpenumpang;
    public function tambahkecepatan(){
        return "Kecepatan Bertambah";
    }
}
class mobilsport extends mobil{
    public $turbo = false;
    public function aktifkanturbo(){
        $this->turbo=true;
        return "Turbo Diaktifkan";
    }
}
$mobilku = new mobilsport();
echo $mobilku->tambahkecepatan();
echo "<br>";
echo $mobilku->aktifkanturbo();
?>