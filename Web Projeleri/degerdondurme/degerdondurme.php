<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Değer Türü Tespit</title>

    <style>
        body {
            background-color: #854f6c;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .anadiv {
            height: 300px;
            width: 520px;

            border: 1px solid black;
            border-radius: 10px;
        }

        .text {
            margin-top: 80px;
            margin-left: 110px;
            width: 300px;
            height: 20px;
            background-color: #dfb6b2;
        }

        .submit {
            height: 50px;
            width: 150px;
            background-color: #522b5b;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            margin-top: 10px;
        }

        #sonuc {
            width: 150px;
            height: 50px;
            text-align: center;
            border-radius: 15px;
            color: white;
            margin-top: 80px;
            margin-left: 180px;
        }
    </style>
</head>

<body>
    <div class="anadiv">
        <input class="text" type="text" id="input">
        <button class="submit" type="button" onclick="degerTuruTespit()">Tanımla</button>
        <div id="sonuc"></div>
    </div>

    <script>
        function degerTuruTespit() {
            // Input'tan alınan değeri alalım.
            var deger = document.getElementById("input").value;

            // Değeri HTML kodu olarak tanımlamak için bir regex kullanalım.
            var htmlkodlari = /<\/?(?:[a-z0-9]+)[^<>]+>/gi;
            var htmlKoduSonuc = htmlkodlari.test(deger);

            // Değeri SQL kodu olarak tanımlamak için bir regex kullanalım.
            var sqlkodlari = /SELECT|INSERT|UPDATE|DELETE|CREATE|ALTER;/gi;
            var sqlKoduSonuc = sqlkodlari.test(deger);

            // Değerin türünü belirleyelim.
            if (deger.length > 50) {
                document.getElementById("sonuc").innerHTML = "Değeriniz 50'den Büyük Lütfen 50'den Küçük Değer Giriniz !!";
            } else {
                if (deger.length == 0) {
                    // Değer boşsa, "Boş" mesajını gösterelim.
                    document.getElementById("sonuc").innerHTML = "Boş";
                } else if (!isNaN(deger)) {
                    // Değer sayı ise, "Sayı" mesajını gösterelim.
                    document.getElementById("sonuc").innerHTML = "Sayı";
                } else if (isNaN(deger)) {
                    // Değer sayı değilse, "String" mesajını gösterelim.
                    document.getElementById("sonuc").innerHTML = "String";
                    if (htmlKoduSonuc) {
                        // Değer HTML kodu ise, "HTML Kodudur" mesajını gösterelim.
                        document.getElementById("sonuc").innerHTML = "HTML Kodudur";
                    } else if (sqlKoduSonuc) {
                        // Değer SQL kodu ise, "SQL Kodudur" mesajını gösterelim.
                        document.getElementById("sonuc").innerHTML = "SQL Kodudur";
                    }
                }


            }
        }
    </script>


</body>

</html>