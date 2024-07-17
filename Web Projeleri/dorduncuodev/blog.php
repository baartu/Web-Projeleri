<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>E-Ticaret Blog Sayfası</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #dddddd;
    }

    header {
        background-color: #1c1c1c;
        color: white;
        text-align: center;
        padding: 1px 0;
        padding: 25px;
    }

    main {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }

    .sidebar {
        width: 20%;
        background-color: #d3d3d3;
        padding: 10px;
        box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
    }

    .div2 {
        flex: 1;
        margin-left: 0;
        box-shadow: 2px 5px 5px 1px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
        margin-top: 40px;
        background-color: #ffffff;
    }

    .kucukdiv {
        margin-bottom: 0;
        box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.1);
        width: 100%;
        padding: 50px;

    }

    footer {
        background-color: #1c1c1c;
        color: white;
        text-align: center;
        padding: 1px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 30px;
    }

    .sidebar h2 {
        text-align: center;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        display: block;
        margin-bottom: 10px;
    }

    .sidebar ul li a {
        text-decoration: none;
        color: blue;
    }
</style>

<body>
    <header>
        <h1>E-Ticaret Bloğu</h1>
    </header>
    <main>
        <div class="sidebar">
            <h2>E-Ticaret Siteleri</h2><br><br>
            <ul>
                <li>
                    <a href="https://www.trendyol.com/">Trendyol </a><br><br>
                    <a href="https://www.amazon.com.tr/">Amazon</a><br><br>
                    <a href="https://www.n11.com/">N11</a><br><br>
                    <a href="https://www.ciceksepeti.com">Çiçek Sepeti</a><br><br>
                    <a href="https://www.morhipo.com">Morhipo</a><br><br>
                    <a href="https://hepsiburada.com">Hepsi Burada</a>
                </li>
            </ul>
        </div>
        <div class="div2">
            <div class="kucukdiv">
                <h2>Trendyolun Kuruluşu</h2><br>
                <p>2010 senesinde yayın hayatına başlamış olan Trendyol Group, Türkiye'de moda sektöründe faaliyet gösteren bir e-ticaret sitesidir. 2010 senesinde Demet Mutlu tarafından 300 bin dolar sermaye ile Bebek'teki evinin salonunda kurulmuştur. 2018 senesinde Trendyol pazaryerinin %75'i Alibaba tarafından satın alınmıştır.</p>
            </div>
            <div class="kucukdiv">
                <h2>N11'in Kuruluşu</h2><br>
                <p>n11, Mart 2013'te Doğuş Planet tarafından kurulan ve Türkiye'de faaliyet gösteren ve İnternet aracılığıyla işletmeden tüketiciye satış hizmeti sağlayan bir açık pazar e-ticaret platformudur.</p>
            </div>
        </div>
    </main>
    <footer>
        <p>© 2023 E-Ticaret Bloğu</p>
    </footer>
</body>

</html>