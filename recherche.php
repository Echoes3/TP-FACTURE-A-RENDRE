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
	<link rel="stylesheet" type="text/css" href="recherche.css"/>
	<title>Recherche</title>
	
</head>
	<body>
		  <div>
		  		<form method="POST" action="rechercheclient.php" >
		  				<h1>Recherchez un Nom de Client</h1><br/>
		  				<label for="ID"> <p>Entrez le Nom d'un Client : </p><br/></label></br><input type="text" name="ID" required placeholder="Entrez un nom de client" /><br/><br/>
						<input type="submit" value="Recherche" />
				</form>		
		 	</div>
		  <br/>
		  <br/>
			<div>
		  		<form method= "POST" action="recherchefacture.php">
		  			<h1>Recherchez une Facture</h1><br/>
		  			<label for="ID_F"> <p>Entrez le Numéro de Facture : </p><br/></label></br> <input type="number" name="ID_F" required placeholder="Entrez un num de facture" /><br/><br/>
		  			<input type="submit" value="Recherche" />
		  		</form>		
		  </div>
		   <div>
		  		<form method="POST" action="rechercheproduits.php" >
		  				<h1>Recherchez un Produit</h1><br/>
		  				<label for="ID"> <p>Entrez le Nom du Produit :</p> <br/></label></br><input type="text" name="ID" required placeholder="Entrez un nom de Produits" /><br/><br/>
						<input type="submit" value="Recherche" />
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