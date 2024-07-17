<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregister";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
    } else {

        $tc = $_POST['student-tc'];
        $ad = $_POST['student-name'];
        $soyad = $_POST['student-surname'];
        $cinsiyet = $_POST['cinsiyet'];
        $hobbies = $_POST['hobby'];

        // Cinsiyet ve Hobileri birleştir
        $cinsiyet_str = implode(", ", $cinsiyet);
        $hobbies_str = implode(", ", $hobbies);
        
        $check_tc_sql = "SELECT user_tc FROM register WHERE user_tc = '$tc'";
        $result = $conn->query($check_tc_sql);
        
        if ($result->num_rows > 0) {
            echo "<p style='color:white;background-color:red;text-align:center'>Bu TC kimlik numarasına sahip kayıt zaten bulunuyor. </p>";
        } else {
            // SQL sorgusu
            $sql = "INSERT INTO register (user_tc,user_ad, user_soyad, user_cinsiyet, user_hobi) VALUES ('$tc','$ad', '$soyad', '$cinsiyet_str', '$hobbies_str')";

            // Sorguyu çalıştır
            if ($conn->query($sql) == TRUE) {
                echo "<p>Veriler başarıyla kaydedildi.</p>";
            } else {
                echo "<p style='color:white;background-color:red;text-align:center'>Bu TC kimlik numarasına sahip kayıt zaten bulunuyor. </p>";
            }

            // Veritabanı bağlantısını kapat
            $conn->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <style>
        
        body {
            background-color: #6b705c;

        }

        .buyukdiv {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 100px;
        }

        .tablo {
            color: white;
            background-color: #a5a58d;
            border: 2px solid black;
            margin-top: auto;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
        }

        .input {
            display: flex;
        }

        ul li {
            list-style-type: none;
            color: white;
        }

        .div {
            margin-left: 0;
            float: left;
            padding-right: 95px;
            width: 300px;
        }

        .buton {
            background-color: #b7b7a4;
            color: black;
            width: 75px;
            height: 30px;
        }

        .form {
            border: 1px solid black;

        }

        p {
            color: black;
            background-color: #ffe8d6;
            padding: 10px;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="buyukdiv">
        <table border="1" width="100" height="200" class="tablo">
            <tr>
                <th>Tc</th>
                <th>Adı</th>
                <th>Soyadı</th>
                <th>Cinsiyet</th>
                <th>Hobiler</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "userregister";

            $conn = new mysqli($servername, $username, $password, $dbname);

            $sql = "SELECT user_tc,user_ad, user_soyad, user_cinsiyet, user_hobi FROM register";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['user_tc']}</td>
                    <td>{$row['user_ad']}</td>
                    <td>{$row['user_soyad']}</td>
                    <td>{$row['user_cinsiyet']}</td>
                    <td>{$row['user_hobi']}</td>
                </tr>";
            }
            $conn->close();
            ?>
        </table>
        <div class="kucukdiv">
            <input class="buton" type="submit" onclick="sil()" value="Sil">
            <input class="buton" type="submit" onclick="guncelle()" value="Güncelle">

        </div>
    </div>

    <script>
        function sil() {
            window.location.href = 'sil.php';
        }

        function guncelle() {
            window.location.href = 'guncelle.php';
        }
    </script>
</body>

</html>