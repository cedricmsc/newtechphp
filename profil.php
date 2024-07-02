<?php 
 //On démarre la session PHP
 session_start();
    
    $titre = "Page de profil";
    
    // Inclure le fichier header.php
    require_once 'includes/header.php';

    //Inclure le fichier navbar
    include_once 'includes/navbar.php';

    

     //Titre de la page
    echo "<h1>Profil de </h1>";
    ?>
    <p>Profil de :<?= $_SESSION['user']['pseudo'] ?></p>
    <p>Pseudo: <?= $_SESSION['user']['pseudo'] ?></p>
    <p>Email: <?= $_SESSION['user']['email'] ?></p>
    <?php
    
     //Inclure le footer
     include_once 'includes/footer.php'; 