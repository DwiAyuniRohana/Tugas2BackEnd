<?php
class Makeup {
  public $tatarias1;
  public $tatarias2;

  function __construct($tatarias1, $tatarias2) {
    $this->tatarias1 = $tatarias1;
    $this->tatarias2 = $tatarias2;
  }
  function __destruct() {
    echo"<h1>Jenis Jenis Makeup</h1>";
    echo "Aliran makeup yang lagi hits saat ini adalah aliran {$this->tatarias1} dan  {$this->tatarias2}.";
  }
}

$hasil = new Makeup("Makeup Flawless", "Makeup bold");
?>