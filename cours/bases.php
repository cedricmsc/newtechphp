<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les Bases en PHP</title>
</head>

<body>
    <!--Commentaire en HTML-->
    <header>
        <h1>Les Bases en PHP</h1>
    </header>

    <main>
        <?php
            //On écrit Hello World
            echo "<h1>Hello World</h1>".'<br>';

            $nomPersonne = "John Doe";

            echo "<p>bonjour $nomPersonne</p>";

            //L'injection de variable fonctionne UNIQUEMENT avec les "", pas avec les ''

            //Les types de variables
            //Entiers (integer)
            $nombre = 85;
            echo $nombre.'<br>';

            //Les Décimaux(float)
            $nombre = 85.0;
            var_dump($nombre);

            //Les chaines de caractères (string)
            $chaine = "ceci est une chaine de caractères";

            //Les booléens (boolean)
            $vrai = true; //false   
            echo $vrai.'<br>';
            

            //Les tableaux (array)
            $tableau = array("John", "Doe", "Jane", "Doe");
            echo $tableau[0].'<br>';

            //Les objets (object)
            $objet = new stdClass();
            $objet->nom = "John";
            $objet->prenom = "Doe";
            echo $objet->nom.'<br>';
            var_dump($objet);

        ?>
    </main>
 
  
    
</body>
</html>