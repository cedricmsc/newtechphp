<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Manipuler les nombres</title>
</head>
<body>
     <!--Commentaire en HTML-->
     <header>
        <h1>Manipuler les nombres</h1>
    </header>

    <main>
        <?php
            $nombre1 = 14;
            $nombre2 = 85;

            //Modulo ou reste de la division entière
            $resultat = $nombre2 % $nombre1;
            var_dump($resultat);

            //9 est-il un multiple de 3?
            $resultat = 9 % 3;
            echo "<p>$resultat</p>"  ;

            //incrémenter un nombre
            $nombre1 += 1;
            $nombre1++;
            echo "<p>$nombre1</p>";

            //décrémenter un nombre
            $nombre2 -= 1;  
            var_dump($nombre2);
            

        

        ?>
    </main>
    
</body>
</html>