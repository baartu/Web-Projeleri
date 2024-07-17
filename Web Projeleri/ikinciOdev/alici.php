<!DOCTYPE html>
<html lang="tr">
<head>
    <style>
        .tablo{
            background-color: yellow;
            border: 2px solid black;
            margin-top: auto;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
        }
        body{
            
        }
        
    </style>
</head>
<body>
    <table border="1" width="100" height="200" class="tablo">
        <tr>
            <th>Öğrenci Adı</th>
            <th>Öğrenci Soyadı</th>
            <th>Öğrenci Numarası</th>
            <th>Hobiler</th>
        </tr>
        <tr>
            <td><?php echo $_POST['student-name']; ?></td>
            <td><?php echo $_POST['student-surname']; ?></td>
            <td><?php echo $_POST['student-number']; ?></td>
            <td>
            <?php

// Form verilerini al
$hobbies = $_POST['hobby'];

// Hobilerin listesini göster
foreach ($hobbies as $hobby) {
    echo $hobby . ', ';
}

?>
            </td>
        </tr>
    </table>
</body>
</html>
