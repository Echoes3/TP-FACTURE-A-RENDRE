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

					$req = $bdd->prepare('SELECT * FROM client WHERE NomClient =?');
					$req->execute(array(htmlspecialchars($_POST['ID'])));


					/*if($req->rowCount()== 0)
					{
						header('Location: recherche.php');
					}*/


					while ($donnees = $req->fetch())
					{

						$NC=$donnees['NumClient'];
					?>
						
							<h1>Client : <?php echo $donnees['NomClient'].' - '.$donnees['PrenomClient'];?></h1>
			 				<ul class="Les clients">
			  					<li><?php echo $donnees['AdresseClient'];?></li>
			  					<li><?php echo $donnees['Cp'];?></li>
			  					<li><?php echo $donnees['VilleClient'];?></li>
			  					<li><?php echo $donnees['PaysClient'];?></li>
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