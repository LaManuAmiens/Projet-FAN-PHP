<?php
$fichier = 'source.xml';  
$xml = simplexml_load_file($fichier) or die('Erreur : impossible de créer l\'objet');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title><?= $xml->page[intval($_GET['id'])-1]->title ?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="1.html"><img class="logo"src="assets/img/logo.png" alt="logo"><?= $xml->page[0]->menu; ?></a>
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">&#9776;</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="2.html"><?= $xml->page[1]->menu; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="3.html"><?= $xml->page[2]->menu; ?></a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="4.html"><?= $xml->page[3]->menu; ?></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
        <?= $xml->page[intval($_GET['id'])-1]->content ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    </body>
</html>

