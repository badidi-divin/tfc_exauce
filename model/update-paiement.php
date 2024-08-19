<?php 
	$id=$_GET['id'];
	$requser=$pdo->prepare("SELECT * FROM paiement WHERE id=?");
	$requser->execute(array($_GET['id']));
	$userinfo=$requser->fetch();

	if (isset($_POST['envoie'])) {
	$reste=$_POST['reste'];
	$montant2=$_POST['montant_payer'];
	if ($montant2>$reste) {
		?>
			<script type="text/javascript">
				alert('Le Montant Payer doit être toujours inférieur ou égal au reste')
			</script>
			<?php
			header("location:".$_SERVER['HTTP_REFERER']);
			exit();	
			
	}else{
		$solde=$reste-$montant2;	
	}
		$ps=$pdo->prepare("UPDATE paiement SET montant_payer=?,reste=?,annee=? WHERE id=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($montant2,$solde,$_POST['annee_scolaire'],$id);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);

	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Vos données ont été bien Modifiées!')
			</script>
			<script>
				window.open('./paiement.php','_self')
			</script>
			<?php

			exit();	
			}