<!DOCTYPE html>
<html lang="tr">

<head>
    <style>

        #container {
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #508d4f;
        }

        #div1 {
            padding: 10px;
        }

        .input {}

        .buton {
            width: 100px;
            height: 50px;
            background-color: #1a2519;
            text-transform: uppercase;
            font-size: medium;
            font-style: italic;
            color: white;
        }

        ul li {
            list-style-type: none;
        }

        .label {
            padding-left: 40px;
            text-align: center;
        }

        .hobbies {
            margin-top: 0;

        }
    </style>
</head>

<body>
    <h1></h1>
    <form id="student-form" method='post' action="alici.php">
        <div id="container">
            <div id="div1">
                <label for="student-name">Öğrenci Adı:</label><br>
                <input class="input" type="text" id="student-name" name="student-name" required><br>

                <label for="student-surname">Öğrenci Soyadı:</label><br>
                <input class="input" type="text" id="student-surname" name="student-surname" required><br>

                <label for="student-number">Öğrenci Numarası:</label><br>
                <input class="input" type="number" id="student-number" name="student-number" required>
            </div>
            <div id="div2">
                <label class="label" for="hobbies">Hobiler:</label>
                <ul class="hobbies">
                    <li><input type="checkbox" name="hobby[]" value="Futbol Oynamak"> Futbol Oynamak</li>
                    <li><input type="checkbox" name="hobby[]" value="Yürüyüş Yapmak"> Yürüyüş Yapmak</li>
                    <li><input type="checkbox" name="hobby[]" value="Film İzlemek"> Yüzmek</li>
                </ul>
            </div>
            <div id="div3">
                <input class="buton" type="submit" value="Gönder">
            </div>
        </div>

    </form>
</body>

</html>