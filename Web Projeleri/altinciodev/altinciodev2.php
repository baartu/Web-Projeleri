<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
    } else {
        $ad = $_POST['student-name'];
        $soyad = $_POST['student-surname'];
        $cinsiyet = $_POST['cinsiyet'];
        $hobbies = $_POST['hobby'];

        // Cinsiyet ve Hobileri birleştir
        $cinsiyet_str = implode(", ", $cinsiyet);
        $hobbies_str = implode(", ", $hobbies);

        // SQL sorgusu
        $sql = "INSERT INTO users (user_name, user_soyadi, user_cinsiyet, user_hobi) VALUES ('$ad', '$soyad', '$cinsiyet_str', '$hobbies_str')";

        // Sorguyu çalıştır
        if ($conn->query($sql) == TRUE) {
            echo "<p style='color:black;text-align:center'>Veriler başarıyla kaydedildi.</p>";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
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
        body {
            background-color: white;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #8A2BE2; /* Dark Orchid */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #E6E6FA; /* Lavender */
        }

        tr:hover {
            background-color: #D8BFD8; /* Thistle */
        }
    </style>
</head>

<body>
    <table border="1" width="100" height="200" class="tablo">
        <tr>
            <th>Adı</th>
            <th>Soyadı</th>
            <th>Cinsiyet</th>
            <th>Hobiler</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT user_name, user_soyadi, user_cinsiyet, user_hobi FROM users";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['user_name']}</td>
                    <td>{$row['user_soyadi']}</td>
                    <td>{$row['user_cinsiyet']}</td>
                    <td>{$row['user_hobi']}</td>
                </tr>";
        }
        $conn->close();
        ?>
    </table>
</body>

</html>