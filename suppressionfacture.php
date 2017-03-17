<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=waff', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

		$req = $bdd->prepare('DELETE  FROM facture WHERE NumClient =?');
		$req->execute(array(htmlspecialchars($_POST['facture'])));

		header('Location: suppression.php');

?>