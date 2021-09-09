<?php
    class makeup {
        // static Property
        public static $tatarias;
        public static $merk;

        // static method
        public static function produk1(){
            return "<br>";
        }

        // Mengakses Property dan method pada class sendiri
        public static function produk2(){
            return "<br>".self::$merk." adalah merk paling direkomendasikan untuk membuat look ".self::produk1();
        }
    }

    // Set static property
    Makeup::$tatarias='Bold Makeup';
    Makeup::$merk='Maybelline';

    // menampilkan static property
    echo "<h1>Merk dan Jenis Makeup paling direkomendasikan</h1>";
    echo "Aliran Makeup yang difavoritkan MUA adalah ".Makeup::$tatarias;
    echo "<br>";
    echo Makeup::produk1();
    echo "<br>";
    // menampilkan static method dengan menggunakan seft
    echo Makeup::produk2();

?>