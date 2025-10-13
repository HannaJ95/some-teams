<?php
    $headerImage = "fotboll.png";
    require('resources/data.php');
    require('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some teams</title>
</head>
    <style>
        * { box-sizing: border-box; }

        body {
            background-color: #faf4e8;
        }

        .container-team-boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-content: stretch;
            margin: 20px;
            height: 100%;
            width: 100%;
        }

        .team-box {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #fffbf2;
            padding: 5px;
            border-radius: 5px;
            flex-direction: row;
            width: 200px;
            margin: 15px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }

        .team-link {
            text-decoration: none;
        }

        .team-box:hover {
            box-shadow: 1px 1px 10px 10px #8383a6ff;
        }


    </style>

<body>
    <div class="container-team-boxes">
        <!-- Skriver ut teams arrayen -->
        <?php foreach ($teams as $teamName => $teamData): ?>
                <div class="team-box">
                    <a class="team-link" href="<?= $teamData['url'] ?>">
                    <img src="<?= $teamData['logo'] ?>" alt="team logo" height="80">
                    <h2><?= $teamName ?></h2>
                    <p><strong>Stad: </strong><?= $teamData['city'] ?></p>
                    <p><strong>Liga: </strong><?= $teamData['league'] ?></p>
                    <p><strong>UEFA-ranking: </strong><?= $teamData['uefa-coefficient-ranking'] ?></p>

                    <!-- Skriver ut varje element i arrayen där opponents är nyckeln och komma separerar dom 
                    utan att lägga till ett komma på sista -->
                    <p><strong>Motståndare: </strong><?= implode(', ', $teamData['opponents']) ?></p>
                    </a>
                </div>
        <?php endforeach; ?>
    </div>
</body>

</html>