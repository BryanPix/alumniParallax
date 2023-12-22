<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Javascript -->
    <script type="text/javascript" src="./assets/script/script.js" defer></script>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        <?php
        include './assets\style\style.css';
        ?>
    </style>
    <title>alumni</title>
</head>

<body>
    <div id="background1">
        <?php
        include './components\navbar.php';
        ?>
        <div class="popup">
            <div class="popup-content text-dark">
                <h2 class="text-center">Bienvenue !</h2>
                <ul>
                    <li>Ceci est un test de site Internet.</li>
                    <li>Fait lors de la formation de l'AFPA2023</li>
                    <li>Le Footer provient d'un ancient projet.</li>
                    <li>La section commentaire n'est pas fonctionnelle.</li>
                    <li>Elle sert de catalyseur<sup style="color:black; font-weight:bold">1</sup> pour démontrer les effets du parallaxe sur un site web.</li>
                    <li>N'hésitez pas à dérouler jusqu'en bas afin d'attester de cet effet.</li>
                    <li>Ce site est sujet à des modifications.</li>
                    <li>Amusez-vous bien !</li>
                    <br>
                    <p style="color:black; font-weight:bold">1. Élément qui provoque une réaction par sa seule présence ou par son intervention.</p>
                </ul>
                <span class="close-btn">X</span>
            </div>
        </div>

        <div class="container row row-cols-4">

            <?php
            include './assets/data/data.php';
            $imageFolder = './assets/img/';
            $imageFiles = glob($imageFolder . '*.jpg');
            foreach ($data as $key => $card) {
                echo '<div class="card flip-card-inner" style="width: 18rem;">';
                echo '<img class="card-img-top" src="' . $imageFiles[$key] . '" alt="' . $card['name'] . '" >';
                echo '<div class="card-body">';
                echo '<h3 class="card-title"">' . $card['name'] . '</h3>';
                echo '<p class="card-title" style="font-size:14px"">' . $card['phone'] . '</p>';
                echo '<p class="card-title" style="font-size:13px ; font-weight:bold"">' . $card['email'] . '</p>';
                echo '<p class="card-title"">' . $card['region'] . '</p>';
                echo '<button class="btn">Plus d infos</button>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <button onclick="topFunction()" id="Btn" title="Return To The Top">retournez en haut</button>
        <div id="background2">
            <?php
            include './components\secCommentaire.php';
            ?>

        </div>
        <?php
        include './components\footer.php';
        ?>


    </div> <!-- End background1 -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>;
</body>

</html>