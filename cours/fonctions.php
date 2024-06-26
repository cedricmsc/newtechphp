<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                //Pour documenter une fonction il suffit de mettre un commentaire au dessus de la fonction

                //Les fonctions
                $array = [
                    'user1'=>[
                        'name'=> 'chris',
                        'firstname' =>'Lambert',
                        'age'=> 38,
                        'adresse'=>'3 rue des grandes terres, 41320'
                    ],
                    'user2'=>[
                        'name'=> 'berniche',
                        'firstname' =>'ngoma',
                        'age'=> 27,
                        'adresse'=>'35 rue du général schmith'
                    ]
                    ];

                //Les champs nommés avec PHP 8

                /**
                 * Permet de saluer une personne en fonction de son nom et de son prénom et de sa civilité qui est optionnelle
                 * @param string $nom : le nom de la personne
                 * @param string $prenom : le prénom de la personne
                 * @param string $civilite : la civilité de la personne
                 * @param string $salutation : la salutation à afficher
                 */
                function saluer($nom, $prenom, $civilite ='Mr', $salutation="Bonjour"){
                    echo "$salutation $civilite $nom $prenom";
                }                    
                echo '<br>';
                saluer($nom='guy', $prenom='roger');
                echo '<br>';
                
                /*La fontion return fait ressortir un information une information à l'intérieur d'une variable
                fois que la fonction est executée
                tout ce qui est mis après le return ne sera pas executé
                */

                /** 
                 * Permet de calculer la somme de deux nombres
                 * @param int $a
                 * @param int $b
                 * @return int qui est la somme de $a et $b
                */
                function addition($a, $b){
                    return $a + $b;
                }
                $total = addition(5, 3);
                var_dump($total);
                echo '<br>';

                


              

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