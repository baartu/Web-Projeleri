<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayar Arka PLan Değiştirme </title>
    <style>
        body {
            transition: background-color 0.5s ease;
        }
        
    </style>
    <script>
        function arkaplandegistirme() {
            var arkaplanrenk = '#' + Math.floor(Math.random() * 16777215).toString(16);
            document.body.style.backgroundColor = arkaplanrenk;
        }
        function renkdegistirme(){
            var yazirenk='#'+Math.floor(Math.random()*16777215).toString(16);
            var yazi=document.getElementById('yazi');
            yazi.style.color=yazirenk;
        }
        function boyutdegistir(){
            var yazi=document.getElementById('yazi');
            var boyut=Math.floor(Math.random()*300).toString(16)+'px';
            yazi.style.fontSize=boyut;
        }
       
    </script>
</head>

<body>
<h1 id="yazi">Arka Plan Değiştirme</h1>
<button onclick="arkaplandegistirme(),renkdegistirme(),boyutdegistir()">Arka Plan Rengini Değiştir</button>

<button onclick="renkdegistirme()"> Yazi rengi Değiştir</button>
<button onclick="boyutdegistir()">Boyut Değiştir</button>
</body>

</html>