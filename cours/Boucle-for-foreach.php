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
            //Les Boucles for
            for ($i=0; $i < 10; $i++) { 
                echo "La valeur de i est : $i <br>";
            }  
            echo "<br>";
            
            //La boucle foreach
            $tab = array("A", "B", "C", "D", "E");
            foreach ($tab as $value) {
                echo "La valeur de value est : $value <br>";
            }
            echo "<br>";

            //La boucle foreach avec les clés valeurs
            $tab = array("A" => "Alpha", "B" => "Beta", "C" => "Charlie", "D" => "Delta", "E" => "Echo");
            foreach ($tab as $key => $value) {
                echo "La clé est : $key et la valeur est :".strtoupper($value) ."<br>";
            }
            echo "<br>";

            echo "Mon tableau contient: " .sizeof($tab)." éléments";
            echo "<br>";

            echo "Mon tableau contient: " .count($tab)." éléments";
            echo "<br>";
            
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