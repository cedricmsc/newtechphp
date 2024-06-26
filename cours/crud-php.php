<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD en php</title>
</head>
<body>
     <!--Commentaire en HTML-->
     <header>
        <h1>Faire du Crud en php</h1>
    </header>

    <main>
        <div class="side">            
            <?php
                //constantes d'environement
                define("DB_HOST", "localhost");                
                define("DB_NAME", "crud");
                define("DB_PASS", "");
                define("DB_USER", "root");

                //DSN de connexion
                $dsn = "mysql:dbname=".DB_NAME.";host=".DB_HOST;

                //Connexion à la base de données
                try {

                    //On crée une instance de la classe PDO
                    $pdo = new PDO($dsn, DB_USER, DB_PASS);
                    echo "Connexion réussie";

                    //On s'assure d'envoyer les données en UTF8
                    $pdo->exec("SET NAMES UTF8");

                    //On définit le mode de fetch par défaut
                    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

                } catch (PDOException $e) {
                    echo "Connexion échouée : ".$e->getMessage();
                }


                //Read du crud
                $sql = "SELECT * FROM users WHERE user_id = 1";

                //On exécute la requête
                $stmt = $pdo->query($sql);

                //On récupère les données (fetch ou fetchAll)
                $users = $stmt->fetchAll();

                //Ajout d'un utilisateur
                $sql = "INSERT INTO users (
                email, password, lastname, firstname, adress, zipcode, city, roles, created_at
                ) 
                VALUES ('john@yahoo.fr', 'mon2325', 'doe', 'john', '12 rue de la paix', '75000', 'Paris', '[\"ROLE_USER\"]', NOW())";

                //Modifier un utilisateur
                $sql = "UPDATE users SET email = '', password = '', lastname = '', firstname = '', adress = '', zipcode = '', city = '', roles = '' WHERE user_id = 1";

                //Supprimer des utilisateurs
                $sql = "DELETE FROM users WHERE user_id > 3";

                //Savoir combien de lignes ont été affectées
                echo $stmt->rowCount();

                //On exécute la requête
                $stmt = $pdo->query($sql);

                echo '<pre>';
                    var_dump($users);
                echo '<pré>';   
                
               



            
            ?>
        </div>

        <div class="side">
           <?php
            //Parcourir une collection avec map()
            $tab = array("A" => "Alpha", "B" => "Beta", "C" => "Charlie", "D" => "Delta", "E" => "Echo");
           
            $tab = array_map("strtoupper", $tab);
          
            foreach ($tab as $key => $value) {
                echo "La clé est : $key et la valeur est : $value <br>";
            }
    

           ?>

        </div>
       
    </main>
    
</body>
</html>