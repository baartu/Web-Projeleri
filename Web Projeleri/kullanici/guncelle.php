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
        // Kullanıcıdan alınan verileri al
        $tc = $_POST['student-tc'];
        $ad = $_POST['student-ad'];
        $soyad = $_POST['student-soyad'];
        $cinsiyet = isset($_POST['cinsiyet']) ? $_POST['cinsiyet'][0] : null; // Radio buton olduğu için sadece bir değeri alır
        $hobbies = isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : null; // Checkbox'tan gelen değerleri birleştirir

        $check_tc_sql = "SELECT user_tc FROM register WHERE user_tc = '$tc'";
        $result = $conn->query($check_tc_sql);
        if ($result->num_rows > 0) {
            // SQL sorgusu
            $sql_update = "UPDATE register SET user_ad = '$ad', user_soyad = '$soyad', user_cinsiyet = '$cinsiyet', user_hobi = '$hobbies' WHERE user_tc = '$tc'";

            // Sorguyu çalıştır
            if ($conn->query($sql_update) === TRUE) {
                echo "<p style='color:black;text-align:center'>Veri başarıyla güncellendi.</p>";
            } else {
                echo "Hata: " . $sql_update . "<br>" . $conn->error;
            }

            // Veritabanı bağlantısını kapat
            $conn->close();
        } else {
            echo "<p style='color:white;background-color:red;text-align:center'>Bu TC kimlik numarasına sahip kayıt bulunamadı. </p>";
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

        ul li {
            list-style-type: none;
            color: white;
        }

        .div {

            float: left;
            padding-right: 95px;
            width: 300px;
            flex-direction: column;
        }

        .buton {
            background-color: #b7b7a4;
            color: black;
            width: 75px;
            height: 30px;
        }

        .form {
            border: 1px solid black;
            padding: 25px;
        }

        p {
            color: black;
            background-color: #ffe8d6;
            padding: 10px;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .button {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input {
            width: 250px;
        }
    </style>
</head>

<body>
    <div class="buyukdiv">
        <div class="div">
            <form class="form" method="post" action="">
                <br>
                <label style="color:white" for="student-tc">TC Numarası:</label>
                <input class="input" type="text" name="student-tc" id="student-tc" required><br>

                <label style="color:white" for="student-tc">Adınız:</label>
                <input class="input" type="text" name="student-ad" id="student-ad" required><br>

                <label style="color:white" for="student-tc">Soyadınız:</label>
                <input class="input" type="text" name="student-soyad" id="student-soyad" required><br><br>

                <label style="color:white" class="label" for="cinsiyet">Cinsiyet:</label>
                <ul class="cinsiyet">
                    <li><input type="radio" name="cinsiyet[]" value="erkek">Erkek</li>
                    <li><input type="radio" name="cinsiyet[]" value="kadın">Kadın</li>
                </ul>

                <label style="color:white" class="label" for="hobbies">Hobiler:</label>
                <ul class="hobbies">
                    <li><input type="checkbox" name="hobby[]" value="Futbol Oynamak"> Futbol Oynamak</li>
                    <li><input type="checkbox" name="hobby[]" value="Yürüyüş Yapmak"> Yürüyüş Yapmak</li>
                    <li><input type="checkbox" name="hobby[]" value="Film İzlemek"> Yüzmek</li>
                </ul>
                <div class="button">
                    <input class="buton" type="submit" value="Güncelle">
                </div>
            </form>
        </div>

        <div class="div">
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

                $sql = "SELECT user_tc, user_ad, user_soyad, user_cinsiyet, user_hobi FROM register";
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
        </div>
    </div>
</body>

</html>