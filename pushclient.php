<?php
	session_start();

	
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=waff', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

			$req = $bdd->prepare('INSERT INTO client(NomClient, PrenomClient, AdresseClient, Cp, VilleClient, PaysClient) VALUES (:NOM, :PRENOM, :ADRESSE, :CP, :VILLE, :PAYS)');

			$req->execute(array(
				'NOM'=>htmlspecialchars(strtolower($_POST['NomClient'])),
				'PRENOM'=>htmlspecialchars(strtolower($_POST['PrenomClient'])),
				'ADRESSE'=>htmlspecialchars(strtolower($_POST['AdresseClient'])),
				'CP'=>htmlspecialchars(strtolower($_POST['Cp'])),
				'VILLE'=>htmlspecialchars(strtolower($_POST['VilleClient'])),
				'PAYS'=>htmlspecialchars(strtolower($_POST['PaysClient']))
				));

			$req->closeCursor();
			header('Location: ajout.php');
	  

?>

