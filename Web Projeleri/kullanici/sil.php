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
        // Kullanıcıdan alınan TC kimlik numarasını al
        $tc = $_POST['student-tc'];

        // TC kimlik numarasını kontrol et ve silme işlemi
        $sql_check = "SELECT * FROM register WHERE user_tc = '$tc'";
        $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {
            // TC kimlik numarasına sahip kayıt bulundu, silme işlemi
            $sql_delete = "DELETE FROM register WHERE user_tc = '$tc'";
            if ($conn->query($sql_delete) === TRUE) {
                echo "<p>Veri başarıyla silindi.</p>";
            }
        } else {
            // TC kimlik numarasına sahip kayıt bulunamadı
            echo "<p style='color:white;background-color:red;text-align:center'>Bu TC kimlik numarasına sahip kayıt bulunamadı.</p>";
        }

        // Veritabanı bağlantısını kapat
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <style>
        p {
            color: black;
            background-color: #ffe8d6; 
            padding: 10px;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .tablo {
            background-color: #a5a58d;
            border: 2px solid black;
            margin-top: 50px;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            
        }

        body {
            background-color: #6b705c;
        }
        .buton{
            background-color: #b7b7a4;
            width: 100px;
            height: 25px;
        }
        .anadiv{
            margin-left: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="anadiv">
    <form method="post" action="">
        <label style="color:white" for="student-tc">TC Numarası:</label>
        <input type="text" name="student-tc" id="student-tc" required>
        <input class="buton" type="submit" value="Sil">
    </form>

    </div>
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
</body>

</html>
