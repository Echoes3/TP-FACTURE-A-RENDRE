
<?php

//classe Client
class Client{


	//Données Membres
	private $_NumClient;
	private $_NomClient;
	private $_PrenomClient;
	private $_AdresseClient;
	private $_Cp;
	private $_VilleClient;
	private $_PaysClient;

	
	private $_collectFacture=array();



	

	//Fcts Membres

	
	public function __construct($mId,$mNom,$mPrenom,$mAdr,$mCp,$mVille,$mPays){

		//echo "Contructeur <br/>";
		$this->_NumClient=$mId;
		$this->_NomClient=$mNom;
		$this->_PrenomClient=$mPrenom;
		$this->_AdresseClient=$mAdr;
		$this->_Cp=$mCp;
		$this->_VilleClient=$mVille;
		$this->_PaysClient=$mPays;
		

	
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

	public function getId(){


		return $this->_NumClient;
	}

	public function getNom(){


		return $this->_NomClient;
	}

	public function getPrenom(){


		return $this->_PrenomClient;
	}

	public function getAdresse(){


		return $this->_AdresseClient;
	}

	public function getCp(){

		return $this->_Cp;
	}


	public function getVille(){

		return $this->_VilleClient;

	}

	public function getPays(){

		return $this->_PaysClient;

	}

	public function setIdClient($mId){

		$this->_NumClient=$mId;

	}

	public function setNom($mNom){

		$this->_NomClient=$mNom;

	}

	public function setPrenom($mNom){

		$this->_PrenomClient=$mPrenom;

	}

	public function setAdresse($mAdresse){

		$this->_AdresseClient=$mAdresse;

	}

	public function setCp($mCp){

		$this->_Cp=$mCp;

	}

	public function setVille($mVille){

		$this->_VilleClient=$mVille;

	}

	public function setPays($mPays){

		$this->_PaysClient=$mPays;

	}






	public function affiche(){

		echo $this->_NumClient."<br/>";
		echo $this->_NomClient."<br/>";
		echo $this->_PrenomClient."<br/>";
		echo $this->_AdresseClient."<br/>";
		echo $this->_Cp."<br/>";
		echo $this->_VilleClient."<br/>";
		echo $this->_PaysClient."<br/>";
		//echo $this->_collectFacture[$i]->affiche();"<br/>";

		// Affichage des produits dans la facture
  		foreach(self::getFactClient() as $valeur) {
 
    		echo $valeur->affiche().'<br/>';
    			
  		}

	}



	public function getFactClient(){

		return $this->_collectFacture;

	}

	public function addFature(Facture $mCollection){

		if (!in_array($mCollection,$this->_collectFacture)){
			$mCollection->setClient($this);
			$this->_collectFacture[]=$mCollection;
		}
		
			

	}


	
}


?>