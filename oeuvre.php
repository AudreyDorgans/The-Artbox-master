<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <?php
        include_once "header.php"; 
    ?>

    <main>

    <?php 
        include_once "oeuvres.php";

        if (isset ($_GET['numero']) && (is_numeric(($_GET['numero'])) && ($_GET['numero']<=15)) && ($_GET['numero']>0)) {

            foreach ($oeuvres as $value) {

                if (in_array($_GET['numero'], $value)) {
                
                    echo "<article id='detail-oeuvre'>
                            <div id='img-oeuvre'>
                                <img src=".$value['image'].">
                            </div>
                            <div id='contenu-oeuvre'>
                                <h1>".$value['titre']."</h1>
                                <p class='description'>".$value['artiste']."</p>
                                <p class='description-complete'>".$value['description']."</p>
                            </div>
                        </article>";
                }                
            }         
        } else {
                    echo "<div id='contenu-oeuvre'>
                            <h1>Oups, il semblerait que cette oeuvre n'existe pas.</h1>
                            <a href='index.php' title='Retourner à l'accueil'>".'Retourner à l\'accueil'."</a>
                        </div>";
        }

    ?>
    
</main>

<?php
    include_once "footer.php"; 
?>

</body>
</html>