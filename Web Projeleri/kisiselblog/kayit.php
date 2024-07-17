<?php
// POST verilerini al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Veritabanı bağlantısı ve SQL sorgusu
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "kisisel";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    $check_tc_sql = "SELECT user_kullanici FROM veri WHERE user_kullanici = '$username'";
    $result = $conn->query($check_tc_sql);

    if ($result->num_rows > 0) {
        echo "<p>Bu kullanıcı adına sahip kayıt zaten bulunuyor. </p>";
    } else {
        // SQL sorgusu
        $sql = "INSERT INTO veri (user_ad, user_soyadi, user_kullanici, user_sifre) VALUES ('$name','$surname', '$username', '$password')";

        // Sorguyu çalıştır
        if ($conn->query($sql) == TRUE) {
            echo "<p>Veriler başarıyla kaydedildi.</p>";
        } 
        // Veritabanı bağlantısını kapat
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        .container label{
            text-align: left;
        }


        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 style="text-align: center;">Kayıt Ol</h2>
        <form action="kayit.php" method="post">
            <div class="input-group">
                <label for="name">Adınız:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="surname">Soyadınız:</label>
                <input type="text" id="surname" name="surname" required>
            </div>
            <div class="input-group">
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Şifre:</label>
                <input type="password" id="password" name="password" required>
                <input style="width: 12px;height:12px" onclick="goster()" type="checkbox">Göster
            </div>
            <button  type="submit" class="btn" onclick="kayit()">Kayıt Ol</button>
        </form>
    </div>
    <script>
        function goster() {
            var passwordField = document.getElementById("password");
            var toggleBtn = document.querySelector(".toggle-password");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleBtn.textContent = "Gizle";
            } else {
                passwordField.type = "password";
                toggleBtn.textContent = "Göster";
            }
        }

        function kayit() {
            window.location.href = "kisiselblog.php";
        }

        function giris() {
            window.location.href = "giris.php";
        }
    </script>
</body>

</html>