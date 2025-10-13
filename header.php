<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav {
            display: flex;
            list-style: none;
            padding: 0;
        }
        li {
            margin-right: 10px;
        }
        a {
            color: black;
        }
        img {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <ul class="nav">
            <li><a href="index.php">Start</a></li>
            <li><a href="about.php">Om mig</a></li>
        </ul>

        <img src="resources/<?= $headerImage ?>" alt="Headerbild" class="header-image">

    </header>
</body>
</html>