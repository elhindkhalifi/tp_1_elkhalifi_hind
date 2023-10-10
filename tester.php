<?php  
session_start();

    if ( $_POST["code"]==$_SESSION['password']){
    echo"<h2><center>Congrats!Le mot de passe est correct.</center></h2>";
 }
 else{
     echo"<h2><center>Mauvaise memoire ! Le mot de passe est incorrect.</center></h2>";
     ;}
 ?>
 <a href="./index.php">retour</a>