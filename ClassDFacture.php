<?php

//Classe DFacture

class DFacture{


	//Données Membres
	private $_Qte;
	private $_NumFacture;
	private $_NumProduit;
	












	//Fcts Membres

	
	public function __construct(){

		
	
	}

	public function __destruct(){

		

	}



public function hydrate(array $donnees)

			{

			  foreach ($donnees as $key => $value)

			  {

			    // On récupère le nom du setter correspondant à l'attribut.

			    $method = 'set'.ucfirst($key);

			        

			    // Si le setter correspondant existe.

			    if (method_exists($this, $method))

			    {

			      // On appelle le setter.

			      $this->$method($value);

			    }
			}
		}





	//Mutateurs

	public function getQte(){


		return $this->_Qte;
	}

	
	public function setQte($mQte){

		$this->_Qte=$mQte;

	}

	public function setFact(Facture $mFact){


		 $this->_Fact=$mFact;
	}

	public function setProduit(Produit $mProd){


		 $this->_Produit=$mProd;
	}

	
	public function affiche(){

		echo $this->_Qte."<br/>";
		
		
	}

	
	
}







?>