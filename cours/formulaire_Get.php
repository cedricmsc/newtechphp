<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les Formulaires GET</title>
</head>
<body>
     <!--Commentaire en HTML-->
     <header>
        <h1>Formulaire avec GET</h1>
    </header>

    <main>
        <div class="side">
            <form action="">
                <div>
                    <label for="nombre1">Nombre1</label>
                    <input type="number" id="nombre1" name="nb1" min=0 max="100" >
                </div>
                <div>
                    <label for="nombre2">Nombre2</label>
                    <input type="number" id="nombre2" name="nb2" min=0 max="100">
                </div>
                <button type="submit">Calculer</button>
            </form>
            <?php
                //Query string = Chaîne de caractère qui fait une requête à un serveur	
                //https://tutos-php.test/?nb1=124&nb1=36&demo=brouette 

                //Récupérer les données du formulaire
                //echo '<pre>';
                //$nb1 = $_GET['nb1'] ?? 0;
                //var_dump($_GET['nb1']);
                //echo '</pre>';
                $total = $_GET['nb1'] + $_GET['nb2'];
                echo '<p>La somme de '.$_GET['nb1'].' et '.$_GET['nb2'].' est égale à '.$total.'<p>';    
              
            ?>
        </div>

        <div class="side">
            <?php
               echo '<pre>';
                $tableau2 = ['Bonjour', 15, true, 58.15];

                //ajouter un element au debut d'un tableau
                array_unshift($tableau2, 'Debut');  
                
                //Ajouter un element à la fin d'un tableau
                array_push($tableau2, 'Fin');                 

                //Diviser le tableau en plusieur partie de 2 valeurs
                $tableau3 = array_chunk($tableau2, 2, true);
                //var_dump($tableau3);
             

                //Mélanger un tableau de façon aléatoire
                shuffle($tableau2);
                
                //Tableau associatif  
                $tableauAssociatif = [
                    'nom' => 'Gambier',
                    'prenom' => 'Benoît',
                    'age' => 25,
                    'ville' => 'Maray'
                ];

                //Parcourir un tableau associatif
                foreach($tableauAssociatif as $cle => $valeur){
                    echo $cle.' : '.$valeur.'<br>';
                }

                //Tableau mutidimensionnel
                $tableauMulti = [
                    'user1' => [
                        'nom' => 'Gambier',
                        'prenom' => 'Benoît',
                        'age' => 25,
                        'ville' => 'Maray'
                    ],
                    'user2' => [
                        'nom' => 'Dupont',
                        'prenom' => 'Jean',
                        'age' => 35,
                        'ville' => 'Paris'
                    ],
                    'user3' => [
                        'nom' => 'Durand',
                        'prenom' => 'Pierre',
                        'age' => 45,
                        'ville' => 'Lyon'
                    ]
                ];

                //afficher le contenu d'un tableau multidimensionnel
                echo $tableauMulti['user2']['nom'].'<br>';




                //var_dump($tableau2);


               
            echo'</pre>';
            ?>

        </div>
       
    </main>
    
</body>
</html>