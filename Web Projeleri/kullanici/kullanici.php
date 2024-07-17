<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userregister";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
} 
?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <style>
        body {
            background-color: #6b705c;
        }

        #container {
            width: 450px;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #a5a58d;
            margin-left: 35%;

        }

        #div1 {
            padding: 10px;
        }

        .input {}

        .buton {
            width: 100px;
            height: 50px;
            background-color: #b7b7a4;
            text-transform: uppercase;
            font-size: medium;
            font-style: italic;
            color: black;
        }

        ul li {
            list-style-type: none;


        }

        .label {
            padding-left: 40px;
            text-align: center;
        }

        .hobbies {
            margin-top: 0;

        }
    </style>
</head>

<body>
    <h1></h1>
    <form id="student-form" method='post' action="kayit.php">
        <div id="container">
            <div id="div1">
                <label for="student-name">Tc:</label><br>
                <input class="input" type="text" id="tc" name="student-tc" required><br>

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
                <input class="buton" type="submit" onclick="sil()" value="Sil">
                <input class="buton" type="submit" onclick="guncelle()" value="Güncelle">
            </div>
        </div>

    </form>
    <script>
        function gonder(){
            window.location.href="kayit.php";
        }
        function sil() {
            window.location.href = 'sil.php';
        }

        function guncelle() {
            window.location.href = 'guncelle.php';
        }
    </script>
</body>

</html>