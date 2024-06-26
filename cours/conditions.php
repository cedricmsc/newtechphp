<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Les Conditions</title>
</head>
<body>
     <!--Commentaire en HTML-->
     <header>
        <h1>Les Conditions et opérateurs de comparaison</h1>
    </header>

    <main>
        <div class="side">            
            <?php
            //Les conditions

            //Pour comparer ==, === (strictement égal en valeur et en type), <, <=, >, >=, !=, !==
            $response = false;
            if ($response) {
                //alors
                echo "C'est vrai";
            } else {
                //Sinon
                echo "C'est faux";
            }   

            echo '<br>';

            //L'opérateur de combiné <=>
            $a = 22;
            $b = 48;
            echo $a <=> $b; //0

            /* 
             <  -> -1  si $a < $b
             =  -> 0  si $a = $b
             >  -> 1  si $a > $b
            */

            echo '<br>';            
            $animal = "chat";
            switch($animal){
                case "chat":
                    echo "miaou";
                    break;
                case "chien":
                    echo "ouaf";
                    break;
                default:
                    echo "Je ne sais pas";
            }
            echo '<br>';

            switch($a <=> $b){
                case "-1":
                    echo "a plus petit que b";
                    break;
                case 0:
                    echo "a est égal à b";
                    break;
                case 1:
                    echo "a est plus grand que b";
                    break;
                default:
                    echo "Je ne sais pas";
            }
            
            ?>
        </div>

        <div class="side">
           <?php

           ?>

        </div>
       
    </main>
    
</body>
</html>