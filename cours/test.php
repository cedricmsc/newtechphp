<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Les Fonctions</title>
</head>
<body>
     <!--Commentaire en HTML-->
     <header>
        <h1>Les Fonctions</h1>
    </header>

    <main>
        <div class="side">
            
            <?php
                
            
                   


              

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