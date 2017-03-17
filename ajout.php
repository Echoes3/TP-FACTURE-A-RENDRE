<?php
	session_start();

	if( isset($_SESSION['Connection']))
	{
		if ($_SESSION['Connection'] == 'OK')
		{
			?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="ajout.css"/>
	<title>Recherche</title>
	
</head>
	<body>
		  <div>
		  		<form method="POST" action="pushclient.php" >
		  				<h1>Ajout d'un Client</h1><br/>
		  				<label for="NomClient"><p> Nom Client : <br/></label></br><input type="text" name="NomClient" required autofocus /><br/><br/>
		  				<label for="PrenomClient"><p> Prenom Client : </p></p><br/></label></br><input type="text" name="PrenomClient" required  /><br/><br/>
		  				<label for="AdresseClient"><p> Adresse Client : </p><br/></label></br><input type="text" name="AdresseClient" required  /><br/><br/>
						<label for="Cp"> CP : <br/></label></br><input type="number" name="Cp" required  /><br/><br/>
						<label for="VilleClient"><p> Ville Client : </p><br/></label></br><input type="text" name="VilleClient" required  /><br/><br/>
						<label for="PaysClient"><p> Pays Client : </p><br/></label></br><input type="text" name="PaysClient" required  /><br/><br/>
						<input id="boutonajout" type="submit" value="envoyer" />


				</form>		
		 	</div>
		 	<div> 
		 		<form method="POST" action="pushproduits.php" >
		  				<h1>Ajout d'un Produit</h1><br/>
		  				<label for="Des"><p> Nom Produit :</p> <br/></label></br><input type="text" name="Des" required autofocus /><br/><br/>
		  				<label for="PUHT"><p> Quantité Produit : </p><br/></label></br><input type="text" name="PUHT" required  /><br/><br/>
		  				
						<input id="boutonajout" type="submit" value="envoyer" />
		  		</form>
		  	</div>
		  	<div> 
		 		<form method="POST" action="pushfacture.php" >
		  				<h1>Ajout d'une facture</h1><br/>
		  				<label for="DateFacture"><p> Date Facture : </p><br/></label></br><input type="Date" name="DateFacture" required autofocus /><br/><br/>
		  				<label for="NumClient"><p> Numéro Client :</p> <br/></label></br><input type="text" name="NumClient" required  /><br/><br/>
		  				
						<input id="boutonajout" type="submit" value="envoyer" />
		  		</form>
		  	</div>
	</body>
</html>












<?php

		}
	}
	else
	{
		header('Location: index.html');
	}
?>