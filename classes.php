<?php
class Makeup{
    public $tatarias1 = 'Flawless MakeUp';
    public $tatarias2 = 'Bold Makeup';

    public function product1() {
        echo 'Highlighter dan Dewy Foundation';
    }
    public function product2() {
        echo 'Eyeshadow dan Lipstik Bold ';
    }
}
$hasil_flawless   = new Makeup;
$hasil_bold  = new Makeup;
?>
<h1>Jenis Jenis Makeup</h1>
<p>Di dalam dunia makeup ada beberapa jenis jenis makeup. Jenis makeup antara lain adalah <?= $hasil_flawless ->tatarias1 ?>, Kunci untuk membuat MakeUp yang flawless terletak pada <?= $hasil_flawless->product1() ?>.</p>
<p>Ada juga yang namanya <?= $hasil_bold->product2() ?>, jika yang satu ini kuncinya terletak pada <?= $hasil_bold->product2() ?>.</p>
