<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=waff', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$nom = "Ben";
$mdp = password_hash("0000", PASSWORD_DEFAULT);

$req = $bdd->prepare('INSERT INTO user(userID, userMDP) VALUES (:USER,:MDP)');

    $req->execute(array(
    	'USER'=>$nom,
    	'MDP'=>$mdp
    	));

    $req->closeCursor();
?>