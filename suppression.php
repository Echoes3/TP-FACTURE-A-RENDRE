<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="suppression.css"/>
	<title>Suppression</title>
	
</head>
	<body>
		  <div>
		  		<form method="POST" action="suppressionclient.php" >
		  				<h1>Suppression d'un Client</h1><br/>
		  				<label for="Client"><p> Entrez le Nom du Client :</p> <br/></label></br><input type="text" name="Client" required autofocus /><br/><br/>
						<input type="submit" value="Suppression" />
				</form>		
		 	</div>
		 	 <div>
		  		<form method="POST" action="suppressionproduits.php" >
		  				<h1>Suppression d'un Produit</h1><br/>
		  				<label for="produits"><p>Entrez le  Nom du Produit :</p> <br/></label></br><input type="text" name="produits" required autofocus /><br/><br/>
						<input type="submit" value="Suppression" />
				</form>		
		 	</div>
		 	<div>
		  		<form method="POST" action="suppressionfacture.php" >
		  				<h1>Suppression d'une Facture</h1><br/>
		  				<label for="facture"><p>Entrez Numéro client de la Facture :</p> <br/></label></br><input type="text" name="facture" required autofocus /><br/><br/>
						<input type="submit" value="Suppression" />
				</form>		
		 	</div>
		  
	</body>
</html>