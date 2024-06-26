<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chaine de caractère</title>
</head>
<body>
     <!--Commentaire en HTML-->
     <header>
        <h1>Les Chaînes de caractères</h1>
    </header>

    <main>
        <?php
            //Présentation des chaînes de caractères
            $chaine = "ceci est une chaîne de caractères";
            
            //Afficher 1 caractère de la chaîne
            echo $chaine[5].'<br>';

            //Modifier un caractère de la chaîne
            $chaine[0] = 'F';
            
            //Extraire une partie de la chaîne
            var_dump(substr($chaine, 0, 5)).'<br>';

            //Afficher la longueur de la chaîne
            echo "<p>La longueur de la chaîne est : ".strlen($chaine); "</p>";

            //Remplacer une partie de la chaîne
           $chaine = str_replace("ceci", "cela", $chaine).'<br>';
           echo "<p> $chaine </p>";

           //Fonction de gestion de chaîne PHP
           var_dump(str_contains($chaine, "une")).'<br>';
           echo '<p></>';
           var_dump(str_starts_with($chaine, "Fe")).'<br>';
           echo '<p></>';
           var_dump(str_ends_with($chaine, "res")).'<br>';
           echo '<p></>';
           var_dump(substr_count($chaine, "a")).'<br>';
           echo '<p></>';
        

        ?>
    </main>
    
</body>
</html>