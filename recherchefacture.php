<?php
	session_start();

	if( isset($_SESSION['Connection']))
	{
		if ($_SESSION['Connection'] == 'OK')
		{
	
			if( isset($_POST['ID_F']))
				{
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=waff', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
					}
					catch (Exception $e)
					{
						die('Erreur : ' . $e->getMessage());
					}

					$req = $bdd->prepare('SELECT * FROM facture WHERE NumFacture =?');
					$req->execute(array(htmlspecialchars($_POST['ID_F'])));


					/*if($req->rowCount()== 0)
					{
						header('Location: recherche.php');
					}*/


					while ($donnees = $req->fetch())
					{

						$NC=$donnees['NumFacture'];
					?>
						
							<h1>Facture : </h1>
			 				<ul class="Les Factures">
			  					<li><?php echo $donnees['DateFacture'];?></li>
			  					<li><?php echo $donnees['NumClient'];?></li>
			  					
							</ul> 

						<?php			
					}

				}
			}

			
			}else
			{
				header('Location: recherche.php');
			}
?>