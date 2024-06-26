<?php
  //On vérifie si on a un id dans l'url
  if((!isset($_GET["id"])) || empty($_GET["id"])){
    //Je n'ai pas d'id dans l'url
   header('Location: articles.php'); //redirection vers la page articles.php
    exit;
    }

    //Je récupère l'id dans l'url
    $id = $_GET['id'];

    // Le fichier connect.php est inclus
    require_once 'includes/connect.php';

    //On va chercher l'article dans la base de données
    $sql = "SELECT * FROM `articles` WHERE `article_id` = :id"; // table articles triée par date de création
        
    //On prépare la requête
    $requete = $pdo->prepare($sql);

    //On injecte les valeurs dans la requête avec "bindValue" ou aussi "bindParam"
    $requete->bindValue(":id", $id, PDO::PARAM_INT); //::panaïm deculotaïm

    //On exécute la requête
    $requete->execute();

    //On récupère l'article
    $article = $requete->fetch();

    //On vérifie si l'article existe
    if(!$article){
        //Je n'ai pas d'article, erreur 404
        http_response_code(404);
        echo "Erreur 404, article non trouvé";
        header('Location: articles.php');
        exit;
    }

    $titre = 'Liste des article';

    // Le fichier header.php est inclus
      require_once 'includes/header.php';

    //Inclure la navbar
      include_once 'includes/navbar.php';  
    ?>
    
    <section>                  
        <article>
            <h2><?= strip_tags($article['title'] )?></h2>
            <p>Publié le: <?= strip_tags($article['created_at']) ?></p>
            <p>Contenu <?= strip_tags($article['content'])?></p>
        </article>      
    </section>

    <?php

  



//Inclure le footer
    include_once 'includes/footer.php'; 

    


        
        
        
        
