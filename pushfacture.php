<?php
	session_start();

	date_default_timezone_set('UTC');
	
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=waff', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

			$req = $bdd->prepare('INSERT INTO facture(DateFacture, NumClient) VALUES (:DateFacture, :NumClient)');

			$req->execute(array(
				'DateFacture'=>date('Y-m-d'),
				'NumClient'=>($_POST['NumClient'])
				));

			$req->closeCursor();
			header('Location: ajout.php');
	  

?>