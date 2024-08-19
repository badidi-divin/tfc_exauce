<?php 	
$mc="";
	  
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM eleve WHERE code_eleve LIKE '%$mc%'";
			}
			else
			{
				$req="SELECT * FROM eleve ";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();