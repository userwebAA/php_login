<?php 
session_start();
$user = $_SESSION["connected_user"];
echo "{$user['nom']} {$user['prenom']} est connecté" ;

