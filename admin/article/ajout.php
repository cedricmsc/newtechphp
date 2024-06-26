<?php
    $titre = "Ajouter un article";
    //On traite le formulaire
    if(!empty($_POST)){
        //POST n'est pas vide, on vérifie que tous les champs sont remplis
        if(
            isset($_POST['title'], $_POST['content']) && !empty($_POST['title']) && !empty($_POST['content'])
        ){
            //Le formulaire est complet
            //On récupère les données en les protégéant (failles XSS)
            //On retire les balises du title
            $title = strip_tags($_POST['title']);

            //On neutralise toute balise du contenu
            $content = htmlspecialchars($_POST['content']);

            //on peut les enregistrer
            //On se connecte à la base de données
            require_once '../../includes/connect.php';

            $sql = "INSERT INTO articles (title, content) VALUES (:title, :content)";

            //On prépare la requête
            $query = $pdo->prepare($sql);

            //On injecte les valeurs
            $query->bindValue(':title', $title, PDO::PARAM_STR);
            $query->bindValue(':content', $content, PDO::PARAM_STR);

            //On exécute la requête
            if(!$query->execute()){
                die("Une erreur est survenue");
            
            }

            //On récupère l'id de l'article
            $article_id = $pdo->lastInsertId();

            die("L'article a bien été enregistré avec l'id $article_id");
        }else{
            die("Veuillez remplir tous les champs");
        }
      
    }

    $title = "Ajouter un article";

    // On inclus le header.php 
    require_once '../../includes/header.php';

    //Inclure la navbar
    include_once '../../includes/navbar.php';
?>
    <form action="" method="post">
        <div>
            <label for="title">title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="content">content</label>
            <textarea name="content" id="content"></textarea>
        </div>
        <button type="submit">Enregistrer</button>
    
    </form>



<?php
    //Inclure le footer
    include_once '../../includes/footer.php'; 