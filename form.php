<?php
session_start();

function login () {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
 
    $user_list =  $_SESSION["user_list"];

    foreach ($user_list as $user){
        if ($user["email"] == $email && $user["password"] == $pass){
            $_SESSION["connected_user"] = $user;
            header("location:./dashboard.php");
        }
    }

    header("location:./index.php");
    $_SESSION["errors"] = "Identifiants incorrects";

}


function register () {
    // unset($_SESSION["user_list"]);
    $name = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $pass = $_POST["pass"];

    $user = [
        "nom"=>$name,
        "prenom"=>$prenom,
        "email"=>$email,
        "tel"=>$tel,
        "password"=>$pass,
    ];

    $_SESSION["user_list"][]= $user;
    header("location:./index.php");
}

if (isset($_POST["login_form"])){
    login();
}

if (isset($_POST["register_form"])){
    register();
}
