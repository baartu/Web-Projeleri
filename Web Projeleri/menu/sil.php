<?php

require_once('baglanti.php');
if (isset($_GET['id'])) { //id gönderildi mi gönderilmedi mi onu kontrol eder 
    $id = intval($_GET['id']); //int e döndürür 
    $sql = "delete from urunler where id=?"; //idye göre silme işlemi yapar 
    $stmt = $conn->prepare($sql); //sql komutunu hazırlar
    $stmt->bind_param("i", $id); //? yerine i yi bağlar yani int bir değer bağlamış olur yani
    $stmt->execute(); //hazırlanan sorguyu çalıştırır ve ürünü siler

    if ($conn->affected_rows == 1) { //ürünü sildiyse içine girer
        header('Location:index.php'); //index.phpye yönlendirir.
    } else {
        header('refresh:3;url=http://localhost/index.php'); //sayfayı 3sn sonra tekrar yeniler ve index.php sayfasına yölendirir.
        echo "Ürün Silinemedi Bir Hata Oluştu"; //hata mesajı
    }
}
