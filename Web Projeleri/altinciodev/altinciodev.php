<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "user";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}else{
    echo"<label>Bağlandık..</label>";
}
?>


<!DOCTYPE html>
<html lang="tr">

<head>
<style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .label {
            font-weight: bold;
        }

        .cinsiyet li,
        .hobbies li {
            list-style: none;
            margin-bottom: 8px;
        }

        .buton {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .buton:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1></h1>
    <form id="student-form" method='post' action="altinciodev2.php">
        <div id="container">
            <div id="div1">
                <label for="student-name">Öğrenci Adı:</label><br>
                <input class="input" type="text" id="ad" name="student-name" required><br>

                <label for="student-surname">Öğrenci Soyadı:</label><br>
                <input class="input" type="text" id="soyad" name="student-surname" required><br>

                <label class="label" for="cinsiyet">Cinsiyet:</label>
                <ul class="cinsiyet">
                    <li><input type="radio" name="cinsiyet[]" value="erkek">Erkek</li>
                    <li><input type="radio" name="cinsiyet[]" value="kadın">Kadın</li>
                </ul>
            </div>
            <div id="div2">
                <label class="label" for="hobbies">Hobiler:</label>
                <ul class="hobbies">
                    <li><input type="checkbox" name="hobby[]" value="Futbol Oynamak"> Futbol Oynamak</li>
                    <li><input type="checkbox" name="hobby[]" value="Yürüyüş Yapmak"> Yürüyüş Yapmak</li>
                    <li><input type="checkbox" name="hobby[]" value="Film İzlemek"> Yüzmek</li>
                </ul>
            </div>
            <div id="div3">
                <input class="buton" type="submit" value="Gönder">
            </div>
        </div>

    </form>
</body>

</html>