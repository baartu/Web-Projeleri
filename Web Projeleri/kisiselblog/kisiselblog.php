<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #d4c264;


            /* Hafif gri arkaplan rengi */
        }

        .anadiv {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            background-color: #dfd6a3;
            /* Soft mavi tonu */
            color: black;
            padding: 10px;
            width: 100%;
            text-align: center;
            position: relative;
        }

        .kayıt {
            display: flex;
            justify-content: flex-end;
            margin-right: 10px;
        }

        .buton {
            background-color: #b5af83;

            /* Soft yeşil tonu */
            color: black;
            border: none;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .buton:hover {
            background-color: #c7c69c;
            /* Hover'da daha açık yeşil */
        }

        .div1,
        .div2,
        .div3 {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            text-align: center;
            width: 80%;
            border-radius: 8px;
            background-color: #d9c883;
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.5);

            /* Beyaz arkaplan rengi */
        }

        .footer {
            position: flex;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #dfd6a3;
            color: #12285f;
            text-align: center;
            height: 110px;
            margin-top: auto;
            margin-bottom: 0 auto;
        }

        .social-links {
            margin-top: 10px;
        }

        .social-links a {
            color: #b08968;
            /* Soft yeşil tonu */
            text-decoration: none;
            margin: 0 10px;
        }

        .social-links a:hover {
            text-decoration: underline;
        }

        .nav a {
            color: #12285f;
            /* Soft yeşil tonu */
            margin-right: 30px;
            text-decoration: none;
        }

        .nav a:hover {
            color: #7f7161;
            /* Hover'da daha açık yeşil */
        }

        .footer a:hover {
            color: #cfe2e8;

        }

        .img {
            float: left;
        }

        img {
            width: 100px;
            height: 120px;
            border-radius: 50px;
            float: left;
        }
    </style>
</head>

<body>
    <div class="anadiv">
        <div class="header">
            <div class="kayıt">
                <button class="buton" onclick="kayit()">Kayıt Ol </button>
                <button class="buton" onclick="giris()"> Giriş Yap</button>
            </div>
            <div class="nav">
                <a href="kisiselblog.php">Anasayfa</a>
                <a href="tanit.php">Hakkımızda</a>
                <a href="aciklama.php">Bilgi</a>
            </div>
        </div>

        <div class="div1">
            Neden Kullanırız?
            Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.

        </div>
        <div class="div2">
            Neden Kullanırız?
            Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.

        </div>
        <div class="div3">
            Neden Kullanırız?
            Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.
        </div>
        <div class="div3">
            Neden Kullanırız?
            Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.
        </div>
        <div class="div3">
            Neden Kullanırız?
            Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.
        </div>
        <div class="div3">
            Neden Kullanırız?
            Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.
        </div>
        <div class="div3">
            Neden Kullanırız?
            Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.
        </div>

        <div class="footer">
            <p>İletişim: basaranbartu734@gmail.com</p>
            <div class="social-links">
                <a style="color: #12285f;" href="https://twitter.com/baaarttuu" target="_blank">Twitter</a>
                <a style="color: #12285f;" href="https://www.instagram.com/bartu.basaraan/" target="_blank">Instagram</a>
            </div>
            <p>&copy; 2024 Blog Sitesi</p>
        </div>

    </div>

    <script>
        function kayit() {
            window.location.href = 'kayit.php';
        }

        function giris() {
            window.location.href = 'giris.php';
        }
    </script>
</body>

</html>