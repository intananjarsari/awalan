<?php
class motor {

    var $pemilik;
    var $merk;
    var $harga;

    function hidupkan_mesin () {
       return "Hidupkan mesin";
   }
   function matikan_mesin () {
       return "Matikan mesin";
   }
}

$motor_intan = new motor();

$motor_intan->pemilik="intan";
$motor_intan->merk="honda";
$motor_intan->harga="10 jt";

echo "pemilik : " .$motor_intan->pemilik;
echo "<br />";
echo  "merk : " .$motor_intan->merk;
echo "<br />";
echo  "harga : " .$motor_intan->harga;
echo "<br />";

echo $motor_intan->hidupkan_mesin();
echo "<br />";
echo $motor_intan->matikan_mesin();
?>