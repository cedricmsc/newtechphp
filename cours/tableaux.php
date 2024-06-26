<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les Tableaux</title>
</head>
<body>
     <!--Commentaire en HTML-->
     <header>
        <h1>Manipuler les Tableaux</h1>
    </header>

    <main>
        <div class="side">
            <?php
                echo'<pre>';
                //Dclarer un tableau
                $tableau = array(1,2,3,4,5,6,7,8,9,10);
                //Afficher le contenu du tableau
                print_r($tableau);
                //Afficher la taille du tableau
                echo count($tableau);
                //Afficher le contenu du tableau
                echo $tableau[0];
                echo $tableau[1];
                echo'</pre>';
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

                //Supprimer des valeurs à la fin d'un tableau (pop)
                //$valeur = array_pop($tableau2);

                //Supprimer des valeurs au début d'un tableau (pop)
                //$valeur = array_shift($tableau2);
               
                //unset($tableau[2]); // Supprimer un élement dans un tableau
                         

                //Parcourir un tableau
                foreach($tableau2 as $valeur){
                     echo $valeur.'<br>';
                }
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