<?php 
    //On démarre la session PHP
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: profil.php');
        exit;
    }
    //On vérifie si le formulaire a été soumis

    if(!empty($_POST)){
        //Le forulaire a été soumis
        //On vérifie que tous les champs sont remplis
        if(isset($_POST['email'], ($_POST['pass'])) && !empty($_POST['email']) && !empty($_POST['pass']))
        {
            //Le formulaire est complet
            //On récupère les données en les protégeant contre les failles XSS
            $email = $_POST['email'];
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                //filter_var() permet de valider une adresse email
                //FILTER_VALIDATE_EMAIL est une constante qui permet de valider une adresse email
                die("L'adresse email est invalide");
                }
                //On se connecte à la base de données
                require_once 'includes/connect.php';

                //On écrit la requête
                $sql = "SELECT * FROM `users` WHERE `email` = :email";

                //On prépare la requête
                $requete = $pdo->prepare($sql);

                //On injecte les valeurs
                $requete->bindValue(':email', $email, PDO::PARAM_STR);

                //On exécute la requête
                $requete->execute();

                //On récupère l'utilisateur
                $user = $requete->fetch(PDO::FETCH_ASSOC);

                //On vérifie si l'utilisateur existe
                if(!$user){
                    die("L'utilisateur et/ou le mot de passe est incorrecte");
                }
                //Si l'utilisateur existe, on vérifie le mot de passe
                if(!password_verify($_POST['pass'], $user['password'])){
                    die("L'utilisateur et/ou le mot de passe est incorrecte");
                }
                
                //Le mot de passe et l'utilisateur sont corrects
                
                //On stocke les informations de l'utilisateur dans la session
                $_SESSION['user'] = [
                    "id"        => $user['id'], 
                    "pseudo"    => $user['username'],
                    "email"     => $user['email'], 
                    "roles"     => $user['roles']
                ];

                var_dump($_SESSION['user'] );
                
                //On redirige l'utilisateur vers la page d'accueil
                header('Location: profil.php');            
        }
    }

    $titre = "Connexion";
    
    // Inclure le fichier header.php
    require_once 'includes/header.php';

    //Inclure le fichier navbar
    include_once 'includes/navbar.php';

    

     //Titre de la page
    echo "<h1>Connexion</h1>";
    ?>
    
    <form method="post">
    
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass" id="pass" required>
        </div>

        <button type="submit">Me connecter</button>
    </form>

    <?php
     //Inclure le footer
     include_once 'includes/footer.php'; 