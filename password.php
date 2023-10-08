<?php
require_once("function.php");

$passwordLengthIsValid=passwordLengthIsValid($_POST["password"]);
echo"</br>";

//pour afficher si le mdp est correct ou incorrect
$responses = passwordLengthIsValid($_POST["password"]);
echo $responses['msg'];

if ($passwordLengthIsValid["isValid"]){
    //on fait traitement

    $saltedPassword = addSalt($_POST['password']);
    echo"</br>";
    echo"<h4>Le mot de passe concaténé avec le salt est : $saltedPassword</h4>";

    $encodePassword= encodePassword($saltedPassword);
    echo"</br>";
    echo "<h4>Le mot de passe chiffré/encodé est : $encodePassword</h4>";
}

?>
</BR>
<a href="./index.php">retour</a>
