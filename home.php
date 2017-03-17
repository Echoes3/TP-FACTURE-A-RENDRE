





<?php
	session_start();

	if( isset($_SESSION['Connection']))
	{
		if ($_SESSION['Connection'] == 'OK')
		{
			?>

				<!DOCTYPE html>
				<html lang="fr">
				<head>
					<meta charset="utf-8" />
					<link rel="stylesheet" type="text/css" href="home.css"/>
					<title>Home</title>
				</head>

					<body>
					<h1 align="center" >MENU</h1>
						<div>
						<p> Choisissez la recherche, l'ajout ou la suppression ou bien deconnectez-vous</p>
						<a type="button" href='recherche.php'/> Recherche <a/>
						</br>
						<a type="button" href='suppression.php'/> Suppression <a/>
						
						</br>
						<a type="button" href='ajout.php'/> Ajout<a/>
						</br>
						<a type="button" href='deconnect.php'/> Deconnection <a/>
						</div>
					</body>
				</html>	

			<?php

		}
	}
	else
	{
		header('Location: index.php');
	}
?>