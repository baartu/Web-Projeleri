<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            display: flex;
            gap: 1rem;
            list-style: none;
        }

        .link {
            text-decoration: none;
            color: black;
            font-size: 22px;
            padding: 1rem 2rem;
            position: relative;
        }

        .link::before,
        .link::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: black;
            transform: scaleX(0);
            transition: all 0.6s ease;
        }

        .link::before {
            top: 0;
            left: 0;
            transform-origin: left;
        }

        .link::after {
            bottom: 0;
            left: 0;
            transform-origin: right;
        }

        .link:hover::before,
        .link:hover::after {
            transform: scaleX(1);
        }
    </style>
</head>

<body>
    <div>
        <nav>
            <ul>
                <li><a href="#" class="link">CSS</a></li>
                <li><a href="#" class="link">REACT.JS</a></li>
                <li><a href="#" class="link">REACT.JS</a></li>
                <li><a href="#" class="link">REACT.JS</a></li>
                <li><a href="#" class="link">REACT.JS</a></li>
                <li><a href="#" class="link">REACT.JS</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>