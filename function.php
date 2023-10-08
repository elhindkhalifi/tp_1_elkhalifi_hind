<?php
//Fonction pour verifier la longueur du mot de passe
function passwordLengthIsValid($passwordToValid)
{
    //min 6 max 10
    $length= strlen($passwordToValid);
    $responses=[
        "isValid"=>true,
        "msg"=>"<h2><center>Mot de passe correct!</center></H2>"
    ];
    if ($length < 6 ||$length  > 10) {
        $responses=[
        'isValid'=>false,
        "msg"=>"<h2><center>Mot de passe incorrect!</H2></center></BR>Erreur : Le mot de passe doit avoir entre 6 et 10 caracteres."
        ];
      }  
    return $responses; 
}

//fonction pour concatener le salt au mdp
function addSalt($passwordToSalt){
    $salt="unPeuDeSel123!";
    echo"<h4>Le salt est : $salt</h4>";
    $saltedPassword=$salt.$passwordToSalt.$salt;
    return $saltedPassword;
}

//fonction pour chiffrer/encoder le mdp
function encodePassword($saltedPassword){
    $encodePassword=sha1($saltedPassword);
    return $encodePassword;
}

?>