<?php

    $titre = "Accueil";

    // Le fichier fonction.php est inclus
    require_once 'includes/function.php';

    //Inclure le header
    include_once 'includes/header.php';

    //Inclure la navbar
    include_once 'includes/navbar.php';

    //Ecrire le contenu de la page d'accueil
    echo "<h1>Bienvenue sur notre site</h1>";
    
    require_once 'includes/connect.php';

    $lastname = "mounkala";
    $password = "princounet2010";

    $sql = "SELECT * FROM users WHERE lastname =? AND password =?";


    $requete = $pdo->query($sql);
    $user = $requete -> fetchAll();

    echo'<pre>';
        var_dump($user);
    echo'</pre>';


    


    //Inclure le footer
    include_once 'includes/footer.php';    



