<?php
	session_start();

	if( isset($_POST['ID']) AND isset($_POST['MDP']))
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=waff', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

		$userID_form = htmlspecialchars($_POST['ID']);
		$mdp_form = htmlspecialchars($_POST['MDP']);


		$req = $bdd->prepare('SELECT userMDP FROM user WHERE userID =?');
		$req->execute(array($userID_form));

		if($req->rowCount()== 0)
		{
			header('Location: index.html');
		}

		while ($donnees = $req->fetch())		
		{
			if(password_verify($mdp_form, $donnees['userMDP']))
			{
				$req->closeCursor();
				$_SESSION['Connection'] = 'OK';
				header('Location: home.php');
			}else
			{
				header('Location: index.php');
			}
		}
  }


?>