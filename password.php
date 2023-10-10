
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

    //pour tester le mdp 
    session_start();
    $_SESSION['password'] = $_POST["password"];

    echo"<h1><center>Le Test du Mot de Passe</center></H1>
    <form method='post' action='tester.php'>
    <label for='password'>Mot de Passe :</label>
    <input type='password' id='code' name='code' required>
    <br>
    <input type='submit' value='Tester'>
    </form>";
}
?>
<a href="./index.php">retour</a>
