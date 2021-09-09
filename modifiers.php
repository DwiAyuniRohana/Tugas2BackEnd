<?php
class Makeup
{
    public $product1;
    protected $product2;

    public function getProduk(){
        echo $this->produk1."<br>";
    }
    public function getMerk(){
        echo $this->produk2."<br>";
    }
}
class lipstick extends Makeup{
    public $tatarias;

    function getTatarias(){
        echo $this->tatarias2."<br>";  
    }
    function __construct($parameter1, $parameter2, $parameter3){
        $this->produk1=$parameter1;
        $this->produk2=$parameter2;
        $this->tatarias2=$parameter3;
    }
}
$merk = new lipstick("Maybelline","Makeover","Bold Makeup dan Flawless Makeup");
echo '<h1>Merk dan Jenis Makeup paling direkomendasikan</h1> ';
echo 'foundation paling laris adalah '; $merk->getProduk();
echo 'lipstick favorit MUA adalah '; $merk->getMerk();
echo 'Aliran Makeup paling hits adalah '; $merk->getTatarias();
?>