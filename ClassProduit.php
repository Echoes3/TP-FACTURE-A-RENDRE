<?php


//Classe Produit
class Produit{


	//Données Membres
	private $_NumProduit;
	private $_Des;
	private $_PUHT;
	

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

	public function getNumProduit(){


		return $this->_NumProduit;
	}

	public function getDes(){


		return $this->_Des;
	}

	public function getPrixHt(){


		return $this->_PUHT;
	}

	

	public function setNumProduit($mNum){

		$this->_NumProduit=$mNum;

	}

	public function setDes($mDes){

		$this->_Des=$mDes;

	}

	public function setPrix($mPrixHt){

		$this->_PUHT=$mPrixHt;

	}

	

	public function affiche(){

		echo $this->_NumProduit."<br/>";
		echo $this->_Des."<br/>";
		echo $this->_PUHT."<br/>";
		
	}


	
}




?>