<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #9c6644;
            margin: 5px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;

        }

        .anadiv {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .container {
            background-color: #ddb892;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            float: left;
            margin-right: 15px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 16px;
        }

        h2:hover {
            color: white;
        }
    </style>
</head>

<body>

    <div class="anadiv">
        <div class="container">
            <h2 onclick="tiklaalgo()">ALGORİTMA VE PROGRAMLAMA I</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">BİLGİSAYAR MÜHENDİSLİĞİ GİRİŞ</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">GENEL MATEMATİK I</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">LİNEER CEBİR I</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">TEMEL FİZİK I</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">ALGORİTMA VE PROGRAMLAMA II</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">GENEL MATEMATİK II</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">TEMEL ELEKTRİK VE ELEKTRONİK</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">TEMEL FİZİK II</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> WEB TEKNOLOJİLERİ</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> BİLGİSAYAR GRAFİKLERİ</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> DİFERANSİYEL DENKLEMLER</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">NESNEYE YÖNELİK PROGRAMLAMA</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> OLASILIK VE İSTATİSTİK</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">VERİ TABANI I</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">VERİ YAPILARI</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">AYRIK MATEMATİK</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> LOJİK TASARIM</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">MOBİL PROGRAMLAMA</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> MÜHENDİSLİKTE NÜMERİK ANALİZ</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> VERİ TABANI II</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> BİLGİSAYAR AĞLARI I</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">BİLGİSAYAR MİMARİSİ </h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">BİLGİSAYARLI GÖRME</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">İLERİ PROGRAMLAMA DİLLERİ</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> İŞARET VE SİSTEMLER</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> MİKROİŞLEMCİLER</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()">WEB PROGRAMLAMA</h2>
        </div>
        <div class="container">
            <h2 onclick="tikla()"> YAPAY SİNİR AĞLARINA GİRİŞ</h2>
        </div>

    </div>

    <script>
        function tikla() {
            window.location.href = "blog.png";
        }
        function tiklaalgo() {
            window.location.href = "algo.png";
        }
    </script>
</body>

</html>