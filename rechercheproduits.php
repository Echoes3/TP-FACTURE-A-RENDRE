<?php
	session_start();

	if( isset($_SESSION['Connection']))
	{
		if ($_SESSION['Connection'] == 'OK')
		{
	
			if( isset($_POST['ID']))
				{
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=waff', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
					}
					catch (Exception $e)
					{
						die('Erreur : ' . $e->getMessage());
					}

					$req = $bdd->prepare('SELECT * FROM produits WHERE Des =?');
					$req->execute(array(htmlspecialchars($_POST['ID'])));


					/*if($req->rowCount()== 0)
					{
						header('Location: recherche.php');
					}*/


					while ($donnees = $req->fetch())
					{

						$NC=$donnees['NumProduit'];
					?>
						
							<h1>Produit : </h1>
			 				<ul class="Les produits">
			  					<li><?php echo $donnees['Des'];?></li>
			  					<li><?php echo $donnees['PUHT'];?></li>
			  					
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