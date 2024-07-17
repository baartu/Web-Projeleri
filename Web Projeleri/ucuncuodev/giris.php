<html>

<head>
    <style>
        
        body {
            background-color: #6da5c0;
            color: #05161a;
        }
        input{
            width: 400px;
            height: 30px;
        }

        .dizidiv {
            background-color: #294d61;
            width: 200px;
            height: 50px;
            margin: 0 auto;
        }

        .indisdiv {
            background-color: #294d61;
            width: 200px;
            height: 50px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        .yazi {
            color: white;
            width: 50px;
            height: 10px;
            margin-left: 0;
            font-weight: bold;
        }

        .anadiv {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #294d61;
            width: 400px;
            height: 300px;
            margin: 0 auto;
        }

        input {
            width: 100%;
        }

        .btn {
            background-color: #072e33;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<?php

// Diziler tanımlama
$Bilgisayar = array("Asus", "Hp", "Casper", "Lenovo", "Monster", "Acer");
$Telefon = array("Samsung", "Nokia", "Xiaomi", "LG", "Reeder", "Honor");
$Giyim = array("Mavi", "Defacto", "LC Waikiki", "U.S. Polo Assn", "Avva", "Adidas");

echo "<h1>Array Veri Çekme</h1>";
// Form ekranı oluşturma
echo "<div class='anadiv'><form action='giris.php' method='post'>";
echo "<div class='dizidiv'> 
Dizi İsmini Giriniz :<input type='text' name='dizi' class='inpu'  placeholder='Dizi ismini giriniz'/> <br/>
</div>";
echo "<div class='indisdiv'> 
İndis Numarası :<input type='number' name='indis' class='inpu'   placeholder='İndis numarası giriniz' /> <br/></div>";
echo "<div class='butondiv'> 
<input type='submit' value='Gönder' class ='btn'/></div>";
// Formdan gelen verileri alma
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

</html>