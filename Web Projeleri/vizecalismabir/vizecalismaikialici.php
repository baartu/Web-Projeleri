<?php

$cevaplar = $_POST["cevap"];

foreach ($cevaplar as $soru_id => $cevap) {
  echo "Soru $soru_id cevabı: $cevap";
}

?>
