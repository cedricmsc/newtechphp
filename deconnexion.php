<?php
session_start(); //démarrer la session (toujours en haut du fichier

 if(!isset($_SESSION['user'])){
    header('Location: connexion.php');
    exit;
}

//Supprimer la session
unset($_SESSION['user']); //unset supprime une variable

header('Location: index.php');