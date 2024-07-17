<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'urunlerdb';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = 'SELECT * FROM urunler where id=?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $sonuc = $stmt->get_result();
    if ($sonuc->num_rows >= 1) {
        $row = $sonuc->fetch_assoc();
    } else {
        echo "böyle bir değer yok";
    }
}
if ($_POST && isset($_POST['gunSubmit'])) {
    $urunİsim = $_POST["urunAdi"];
    $urunFiyat = $_POST["urunFiyat"];
    $urunRenk = $_POST["urunRenk"];
    $urunPaket = $_POST["urunPaket"];

    $diziboyut = count($urunPaket);

    $paket = "";

    for ($i = 0; $i < $diziboyut; $i++) {
        if ($i < $diziboyut - 1) {
            $paket .= $urunPaket[$i] . ",";
        } else {
            $paket .= $urunPaket[$i];
        }
    }

    $stmt = $conn->prepare("update urunler set uisim=?,ufiyat=?,urenk=?,upaket=? where id=?");
    $stmt->bind_param('sdssi', $urunİsim, $urunFiyat, $urunRenk, $paket, $id);
    $stmt->execute();

    if ($conn->affected_rows >= 1) {
        echo "güncellendi";
        header("Location:index.php");
    } else {
        header("refresh:3;URL=https://localhost/index.php");
        echo "HATA !!!";
    }

    $conn->close();
}





$sql = "SELECT * FROM urunler order by id desc ";
$result = $conn->query($sql);



function degerDizideVarmi($deger, $tumce)
{
    $dizi = explode(',', $tumce);
    foreach ($dizi as $eleman) {
        if ($eleman == $deger) {
            echo 'checked';
            break;
        }
    }
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
        }

        button {
            width: 100%;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="p-3 border-secondary">
            <h3>ÜRÜN EKLE</h3>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="urunAdi" class="col-sm-2 col-form-label">Ürün Adı</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="urunAdi" name="urunAdi" value="<?= $row['uisim'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="urunFiyat" class="col-sm-2 col-form-label">Ürün Fiyat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="urunFiyat" name="urunFiyat" value="<?= $row['ufiyat'] ?>">
                    </div>
                </div>
                <fieldset class="form-group row">
                    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Ürün Rengi</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urunRengi" id="gridRadios1" value="mavi" <?php
                                                                                                                        if ($row['urenk'] == "mavi") {
                                                                                                                            echo 'checked';
                                                                                                                        }
                                                                                                                        ?>>
                            <label class="form-check-label" for="gridRadios1">
                                Mavi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urunRengi" id="gridRadios2" value="siyah" <?php
                                                                                                                            if ($row['urenk'] == "siyah") {
                                                                                                                                echo 'checked';
                                                                                                                            }
                                                                                                                            ?>>
                            <label class="form-check-label" for="gridRadios2">
                                Siyah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urunRengi" id="gridRadios3" value="gri" <?php
                                                                                                                        if ($row['urenk'] == "gri") {
                                                                                                                            echo 'checked';
                                                                                                                        }
                                                                                                                        ?>>
                            <label class="form-check-label" for="gridRadios3">
                                Gri
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="urunPaket[]" value="karton" <?php degerDizideVarmi("karton", $row['upaket']);   ?>>
                            <label class="form-check-label" for="gridCheck1">
                                Karton
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="urunPaket[]" value="naylon" <?php if (in_array('naylon', explode(',', $row['upaket']))) echo 'checked';  ?>>
                            <label class="form-check-label" for="gridCheck1">
                                Naylon
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="urunPaket[]" value="ahşap" <?php if (str_contains($row['upaket'], 'ahşap')) echo 'checked';   ?>>
                            <label class="form-check-label" for="gridCheck1">
                                Ahşap
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="display: flex;justify-content:right;align-items:right;">
                    <div class="col-sm-10 offset-sm-2" id="buton">
                        <button type="submit" class="btn btn-primary btn-block" name="gunSubmit">Ürün Güncelle</button>
                    </div>
                </div>
            </form>
        </div>

        <div style="background-color: white; height:5px;margin-top:15px"></div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>