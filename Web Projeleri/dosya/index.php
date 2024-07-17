<?php
$f1 = fopen("ogrenci.csv", "r"); //ilk başta dosyayı aç

$sayfa = fread($f1, filesize("ogrenci.csv")); //dosyayı oku

//echo $sayfa;//sayfayı karmaşık yazdırıyor

$dizi = explode("\n", $sayfa); //boşluk vererek dizi diye bir değişkene ata

foreach ($dizi as $key => $value) { //atadığımız diziyi yazdırıyoruz
    echo $value . "<br>";
}

echo "<br> -----KARIŞTIRILMIŞ DİZİ-----</br>";

/*shuffle($dizi);

$i = 0;
$secilenler = [];
foreach ($dizi as $key => $value) {
    if ($i < 30) {
        array_push($secilenler, $value);
    } else {
        break;
    }
    $i++;
}



foreach ($secilenler as $key => $value) {
    echo $value . "<br>";
}


echo "<br> Sayi :",count($secilenler);*/

/*$secilenler2=array_slice($dizi,0,30);
$kalanlar=array_slice($dizi,30,count($dizi));

foreach($secilenler2 as $key =>$value){
echo $value."<br>";
}*/


echo fgets($f1) . "<br>";
echo fgets($f1) . "<br>";
echo fgets($f1) . "<br>";
echo fgets($f1) . "<br>";

echo "<br> ------ Döngü ------</br>";

fseek($f1,0);

while (!feof($f1)) {
    echo fgets($f1) ;
}




?>