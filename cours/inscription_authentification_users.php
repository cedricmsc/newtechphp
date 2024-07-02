<?php 
    
    //On vérifie si le formulaire a été soumis

    if(!empty($_POST)){
        //Le forulaire a été soumis
        //On vérifie que tous les champs sont remplis
        if(isset($_POST['pseudo'], ($_POST['email']), ($_POST['pass'])) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['pass']))
        {
            //Le formulaire est complet
            //On récupère les données en les protégeant contre les failles XSS
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $email = $_POST['email'];
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                //filter_var() permet de valider une adresse email
                //FILTER_VALIDATE_EMAIL est une constante qui permet de valider une adresse email
                die("L'adresse email est invalide");
                }

                //On va hasher le mot de passe
                $pass = password_hash($_POST['pass'], PASSWORD_ARGON2ID);
                //PASSWORD_ARGON2ID est une constante qui permet de hasher un mot de passe
                //password_hash() permet de hasher un mot de passe
                //die($pass); //On affiche le mot de passe hashé  

                //On enregistre le nouvel utilisateur dans la base de données
                // Inclure le fichier connect.php
                require_once '../includes/connect.php';


                //On écrit la requête d'insertion
                $sql = "INSERT INTO `users` (`username`, `email`, `password`, `roles`, created_at) VALUES (:pseudo, :email, 'pass', '[\"ROLE_USER\"]', NOW())";

                //On prépare la requête
                $requete = $pdo->prepare($sql);

                //On injecte les valeurs dans la requête
                $requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR); //::panaïm deculotaïm
                $requete->bindValue(':email', $email, PDO::PARAM_STR);

                //On exécute la requête
                $requete->execute();


                //On redirige l'utilisateur vers la page de connexion



        } else {
            die("Le formulaire est incomplet");
            }
        }

        



    
    

    $titre = "Inscription et authentification des utilisateurs";
    
    // Inclure le fichier header.php
    require_once '../includes/header.php';

    //Inclure le fichier navbar
    include_once '../includes/navbar.php';

    

     //Titre de la page
    echo "<h1>Inscription</h1>";
    ?>
    
    <form method="post">
        <div>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass" id="pass" required>
        </div>

        <button type="submit">M'inscrire</button>


    </form>



   


    <?php
     //Inclure le footer
     include_once '../includes/footer.php'; 