<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş YAP</title>
    <style>
        .anadiv {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .anadiv label {
            margin-bottom: 5px;
        }

        .anadiv .input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .anadiv .cinsiyet {
            list-style: none;
            padding: 0;
        }

        .anadiv .cinsiyet li {
            margin-bottom: 5px;
        }

        .anadiv button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .anadiv button:hover {
            background-color: #0056b3;
        }

        .div2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="anadiv">
        <h3>KAYIT OL</h3>
        <div id="div1">
            <label for="student-name">İsim</label><br>
            <input class="input" type="text" id="tc" name="student-tc" required><br>

            <label for="student-name">Soyisim</label><br>
            <input class="input" type="text" id="ad" name="student-name" required><br>

            <label for="student-surname">E-mail</label><br>
            <input class="input" type="text" id="soyad" name="student-surname" required><br>

            <label for="student-surname">Şifre</label><br>
            <input class="input" type="password" id="soyad" name="student-surname" required><br>

            <input type="checkbox" name="check" id="check">Göster<br>
            <label class="label" for="cinsiyet">Cinsiyet:</label>
            <ul class="cinsiyet">
                <li><input type="radio" name="cinsiyet[]" value="erkek">Erkek</li>
                <li><input type="radio" name="cinsiyet[]" value="kadın">Kadın</li>
            </ul>
        </div>
        <div class="div2">
            <button>KAYIT OL </button>
        </div>
    </div>
    <script>

    </script>
</body>

</html>