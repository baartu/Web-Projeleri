<?php
$sorular = array(
    "1" => "PHP'yi kaç yıldır kullanıyorsunuz ? ",
    "2" => "En sevdiğiniz Programlama Dilini Seçiniz ? ",
    "3" => "Bu anketi nasıl buldunuz ?",
);
$cevaplar = array(
    "1" => array("Yeni başladım", "1-2 yıl", "3-5 yıl", "5 yıldan fazla"),
    "2" => array("PHP", "Python", "Javascript", "Diğer"),
    "3" => array("Harika", "İyi", "Orta", "Kötü"),
);

$kullanicicevaplar = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    foreach ($_POST as $key => $value) {
        $kullanicicevaplar[$key] = $value;
    }

    echo "<h2>Sonuçlar:</h2>";
    foreach ($sorular as $soruID => $soru) {
        echo "<p><strong>$soru:</strong>";
        echo $cevaplar[$soruID][$kullanicicevaplar[$soruID]];
        echo "</p>";
    }
} else {

?>
    <html>

    <body>
        <h1>Anket</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <?php
            foreach ($sorular as $soruID => $soru) {
                echo "<p><strong>$soru</strong></p>";
                foreach ($cevaplar[$soruID] as $cevapID => $cevap) {
                    echo "<label><input type='radio' name='$soruID' value='$cevapID' required>$cevap</label>";
                }
            }

            ?>
            <br>
            <input type="submit" value="Anketi Gönder">
        </form>
    </body>

    </html> 
<?php
}
?>