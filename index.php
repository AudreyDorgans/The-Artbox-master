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
        <div id="liste-oeuvres">

    <?php 

        include_once "oeuvres.php";
      
        foreach ($oeuvres as $value) {       
       
            echo "<article class='oeuvre'>
                    <a href='oeuvre.php?numero=".$value['numero']."'>
                        <img src=".$value['image'].">
                        <h2>".$value['titre']."</h2>
                        <p class='description'>".$value['artiste']."</p>
                    </a>
                </article>";   
        }
    ?>

        </div>
    </main>

    <?php
       include_once "footer.php"; 
    ?>
    
</body>
</html>