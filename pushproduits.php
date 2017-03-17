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

			$req = $bdd->prepare('INSERT INTO produits(Des, PUHT) VALUES (:NOMPROD, :QPROD)');

			$req->execute(array(
				'NOMPROD'=>htmlspecialchars(strtolower($_POST['Des'])),
				'QPROD'=>htmlspecialchars(strtolower($_POST['PUHT']))
				));

			$req->closeCursor();
			header('Location: ajout.php');
	  

?>