<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #333d51;
        }

        .anadiv {
            width: 300px;
            height: 500px;
            border: 1px solid #d3a29d;
            background-color: #cbd0d8;

        }

        .button {
            width: 150px;
            height: 50px;
            margin-top: 10px;
            margin-left: 75px;
            background-color: #d3ac2b;
            color: white;
        }

        input {
            background-color: #f4f3ea;
            color: red;
            margin-left: 25px;
            height: 25px;
            width: 250px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="anadiv">
        <form action="ornek.php" method="post">
            <div>
                <input type="text" id="sayi1" name="yazi" required placeholder="Değerinizi Giriniz">
            </div>
            <div>
                <input id="sayi2" type="text" name="yazi" required placeholder="Değerinizi Giriniz">

            </div>
            <div>
                <button class="button" id="btnTopla"> Topla</button>

            </div>
            <div id="sonuc">

            </div>
        </form>
    </div>

    <script>
        var hesapla = document.getElementById("hesapla");

        hesapla.onclick = function() {
            var sayi1 = Number(document.getElementById("sayi1").value);
            var sayi2 = Number(document.getElementById("sayi2").value);
            var toplam=sayi1+sayi2;
            
        }
    </script>
</body>

</html>