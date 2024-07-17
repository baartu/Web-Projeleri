<?php

require_once('baglanti.php');

if ($_POST) {
    $urunİsim = $_POST["urunAdi"];
    $urunFiyat = $_POST["urunFiyat"];
    $urunRenk = $_POST["urunRengi"];
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

    $sql = "INSERT INTO urunler (uisim, ufiyat, urenk, upaket)VALUES ('$urunİsim', '$urunFiyat','$urunRenk','$paket')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert" style="text-align:center">
            Ürün Başarılı Bir Şekilde Eklendi!
        </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
            Beklenmeyen Bir Hata Oluştu : ' . $conn->error . '
        </div>';
    }

    // $conn->close();
}


$sql = "SELECT * FROM urunler order by id desc";
$result = $conn->query($sql);

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
            background-color: #fff;
        }

        button {
            width: 100%;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="p-3 mt-3 border border-secondary">
            <h3 style="text-align:center">Ürün Ekle</h3>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="urunAdi" class="col-sm-2 col-form-label">Ürün Adı</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="urunAdi" name="urunAdi" style="border: 1px solid black;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="urunFiyat" class="col-sm-2 col-form-label">Ürün Fiyat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="urunFiyat" name="urunFiyat" style="border:1px solid black">
                    </div>
                </div>
                <fieldset class="form-group row">
                    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Ürün Rengi</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urunRengi" id="gridRadios1" value="mavi" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Mavi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urunRengi" id="gridRadios2" value="siyah">
                            <label class="form-check-label" for="gridRadios2">
                                Siyah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="urunRengi" id="gridRadios3" value="gri">
                            <label class="form-check-label" for="gridRadios3">
                                Gri
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="urunPaket[]" value="karton" checked>
                            <label class="form-check-label" for="gridCheck1">
                                Karton
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="urunPaket[]" value="naylon">
                            <label class="form-check-label" for="gridCheck1">
                                Naylon
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="urunPaket[]" value="ahşap">
                            <label class="form-check-label" for="gridCheck1">
                                Ahşap
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary btn-block">Ürün Kaydet</button>
                    </div>
                </div>
            </form>
        </div>

        <div style="background-color: white; height:5px;margin-top:15px"></div>

        <div class="row mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Ürün İsim</th>
                        <th scope="col">Ürün Fiyat</th>
                        <th scope="col">Ürün Renk</th>
                        <th scope="col">Ürün Paket</th>
                        <th scope="col">Kayıt Tarihi</th>
                        <th scope="col">Güncelle</th>
                        <th scope="col">Sil</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>

                            <tr>
                                <td> <?= $row["uisim"]; ?></td>
                                <td> <?= $row["ufiyat"]; ?></td>
                                <td> <?= $row["urenk"]; ?></td>
                                <td> <?= $row["upaket"]; ?></td>
                                <td> <?= $row["utarih"]; ?></td>

                                <td> <a href="duzenle.php?id=<?= $row["id"] ?>" class="btn btn-success">Seç</a></td>

                                <td> <a href="sil.php?id=<?= $row["id"] ?>" class="btn btn-danger">Sil</a></td>
                            </tr>


                    <?php  }
                    } ?>


                </tbody>
            </table>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>