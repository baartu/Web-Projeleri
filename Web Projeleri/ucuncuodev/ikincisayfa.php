<?php

// Diziler tanımlama
$Bilgisayar = array("Asus", "Hp", "Casper", "Lenovo", "Monster", "Acer");
$Telefon = array("Samsung", "Nokia", "Xiaomi", "LG", "Reeder", "Honor");
$Giyim = array("Mavi", "Defacto", "LC Waikiki", "U.S. Polo Assn", "Avva", "Adidas");


if (isset($_POST['dizi']) && isset($_POST['indis'])) {//isset değişken tanımlımı değil mi onu kontrol eder 
    $secilenDizi = $_POST['dizi'];//değişkenin değerini secilen diziye atar formda girdiğini yani
    $indis = $_POST['indis'];

     // Diziden veri çekme
     if (!isset(${$secilenDizi})) {//seçilen diziyi kontrol ediyor var mı yok mu diye
        echo "<h4 class='yazi'>Geçersiz dizi girdiniz!</h4>";
    } else if (!isset(${$secilenDizi}[$indis])) {//seçilen indis numarası var mı yok mu diye kontrol ediyor
        echo "<h4 class='yazi'>Geçersiz indis numarası girdiniz!</h4>";
    } else {//eğer ikiside doğru verilerse de yazdırıyor
        $veri = ${$secilenDizi}[$indis];//değişkenleri alıp veri değişkenine atar

        // Verileri yazdırma
        echo "<h4 class='yazi'> $veri</h4>";
        
    }
    
}

?>