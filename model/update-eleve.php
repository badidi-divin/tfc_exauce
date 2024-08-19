<?php 
	$id=$_GET['id'];
	$requser=$pdo->prepare("SELECT * FROM eleve WHERE code_eleve=?");
	$requser->execute(array($_GET['id']));
	$userinfo=$requser->fetch();

	if (isset($_POST['envoie'])) {
		$ps=$pdo->prepare("UPDATE eleve SET nom=?,postnom=?,prenom=?,sexe=?,classe=?,option=?,tel=?,adresse=?,montant=?,annee_scol=? WHERE code_eleve=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($_POST['nom'],$_POST['postnom'],$_POST['prenom'],$_POST['sexe'],$_POST['classe'],$_POST['option'],$_POST['tel'],$_POST['adresse'],$_POST['montant'],$_POST['annee_scolaire'],$id);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Vos données ont été bien Modifiée!')
			</script>
			<script>
				window.open('./eleve.php','_self')
			</script>
			<?php

			exit();	
			}