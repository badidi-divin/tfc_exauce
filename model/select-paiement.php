<?php
 		$mc="";
		  
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM paiement WHERE code_eleve LIKE '%$mc%'";
			}
			else
			{
				$req="SELECT * FROM paiement";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();
	$nblmd=$pdo->prepare('SELECT SUM(montant_payer) AS prix_total FROM paiement');
    $nblmd->execute();
    $nblmd=$nblmd->fetch()['prix_total'];
	$c=1;
			