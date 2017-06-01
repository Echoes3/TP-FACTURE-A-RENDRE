<?php

include_once "ClassClient.php";
include_once "ClassFacture.php";
include_once "ClassProduit.php";
include_once "ClassDFacture.php";
include_once "ConnexionBDD.php";
include_once "classmanager.php";
/*

?>
<?php
	//programme principal
	/*$mClient=new Client(1,"Nom","Prenom","adresse","cp","ville","Pays");
	$mClient->affiche();
	$date = new DateTime();
	 
	$mFacture=new Facture(1,$date->format('Y-m-d'),"CB");
	$mFacture->affiche();
	$mProduit=new Produit(1,"Des",10);
	$mProduit->affiche();
	$mQteProduitsFacture=new DFacture(50);
	$mQteProduitsFacture->affiche();*/
	$date = new DateTime();

	$mClient=new Client(1,"Nom","Prenom","adresse","cp","ville","Pays");

	$mProduit=new Produit(1,"Ecran 4k",400);

	$prod = new Produit(3,"Gtx 1080",200);

	$db = new PDO('mysql:host=localhost;dbname=facturebonne', 'root', '');

	$manager = new ProduitsManager($db);
	
	$manager->add($prod);
	
	$tProduit=new Produit(2,"test",100);

	$cProduit=new Produit(3,"toto",100);
	
	$mFacture=new Facture(1,$date->format('Y-m-d'),"Cheque");

		
		$mFacture->addProduits($mProduit,10);
	

	$mFacture2=new Facture(2,$date->format('Y-m-d'),"Espece");
	
	for($i=0;$i<5;$i++){
		
		$mFacture->addProduits($tProduit,20);
	
	}
		$mFacture->addProduits($cProduit,20);

	$mClient->addFature($mFacture);

	$mClient->addFature($mFacture2);

	$mFacture2->addProduits($cProduit,20);

	$mClient->affiche();
	
	
	
?>