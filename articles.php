<?php
    $titre = "Les articles";
    // Le fichier fonction.php est inclus
    //require_once 'includes/function.php';

    // Le fichier header.php est inclus
    require_once 'includes/header.php';

    //Inclure la navbar
    include_once 'includes/navbar.php';

    //Ecrire le contenu de la page d'accueil
    echo "<h1>Bienvenue sur les $titre</h1>";


    // Le fichier connect.php est inclus
    require_once 'includes/connect.php';

    //On écrit la requête
    $sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC"; // table articles triée par date de création

    //On exécute la requête
    $stmt = $pdo->query($sql);
    $articles = $stmt->fetchAll();

    ?>
    <h1>Liste des articles</h1>
    <section>
        <?php foreach($articles as $article): ?>            
            <article>
                <h2><a href="article.php/?id=<?= $article["article_id"]?>"><?= strip_tags($article['title'] )?></a></h2>
                <p>Publié le: <?= strip_tags($article['created_at']) ?></p>
                <p>Contenu <?= strip_tags($article['content'])?></p>
            </article>  
        <?php 
            endforeach;
        ?>
    </section>

    <?php

  

    //On affiche les données





    /*
    $sql = "SELECT * FROM users WHERE lastname =:lastname AND password =:password"; 
    // :lastname et :password sont des marqueurs nominatifs ou paramètres sql

    //On prépare la requête
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
        print_r($users);
    echo "</pre>";
*/









    //Inclure le footer
    include_once 'includes/footer.php'; 

    


        
        
        
        
