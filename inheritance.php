<?php
class Makeup {
  public $tatarias1;
  public $tatarias2;
  public $product;
  public function __construct($tatarias1, $tatarias2, $product) {
    $this->tatarias1 = $tatarias1;
    $this->tatarias2 = $tatarias2;
    $this->product = $product;
  }
  public function intro() {
    echo "Masih kurang cocok jika untuk acara resmi seperti pernikahan. Nah {$this->tatarias2} lah salah satu jenis makeup yang cocok untuk acara tersebut. Dan salah satu rekomendasi produk untuk makeup bold adalah {$this->product}";
  }
}

class Cabang extends Makeup {
  public function message() {
    echo"<h1>Jenis Jenis Makeup</h1>";
    echo "Di dunia permakeup an, Makeup Flawless akan memberikan kesan yang simple namun tetap elegan. Namun untuk {$this->tatarias1} ";
  }
}
$hasil = new Cabang ("Flawless MakeUp", "Bold Makeup", "Red Lipstick Maybelline " );
$hasil->message();
$hasil->intro();
?>

