<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=waff', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

		$req = $bdd->prepare('DELETE  FROM client WHERE NomClient =?');
		$req->execute(array(htmlspecialchars($_POST['Client'])));

		header('Location: suppression.php');

?>