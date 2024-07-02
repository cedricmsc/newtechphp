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

    $sql = "SELECT * FROM `users` WHERE lastname =:lastname AND password =:password";


    $requete = $pdo->prepare($sql);

    //On injecte les valeurs dans la requête avec "bindValue" ou aussi "bindParam"
    $requete->bindValue(":lastname", $lastname, PDO::PARAM_STR); //::panaïm deculotaïm
    $requete->bindValue(":password", $password, PDO::PARAM_STR); 

    //On exécute la requête
    $requete->execute();

    //On récupère les données
    $users = $requete->fetchAll();

    //On affiche les données
    echo "<pre>";
        var_dump($users);
    echo'</pre>';


    


    //Inclure le footer
    include_once 'includes/footer.php';    



