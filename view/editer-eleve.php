<?php require_once('../bdd/connexion.php');
	  require_once('../model/update-eleve.php');
 ?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once('head.php'); ?>
		<!-- End Google Tag Manager -->
	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.html">
						<img src="../includes/images/logo.jpg" width="100px" height="120px" alt="" />
						<p style="color:blue; font-weight:bold;">Lycée Sainte Germaine</p>
					</a>
				</div>
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="vendors/images/login-page-img.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Editer Elève</h2>
							</div>
							<form method="post" action="">
								<div class="form-group">
									<label class="control-label">Nom</label>
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="Nom de l'élève" name="nom" value="<?= $userinfo['nom'] ?>"
									/>
								</div>
								<div class="form-group">
									<label class="control-label">Post-Nom</label>
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="Post-Nom de l'élève" name="postnom" value="<?= $userinfo['postnom'] ?>"
									/>
								</div>
								<div class="form-group">
									<label class="control-label">Prenom</label>
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="Prenom de l'élève" name="prenom" value="<?= $userinfo['prenom'] ?>"
									/>
								</div>
								<div class="form-group">
									<label class="control-label">Sexe</label>
									<select name="sexe" class="form-control" autocomplete="off" required="required">
                                        <option value="M">
                                            M
                                        </option>
                                        <option value="F">
                                            F
                                        </option>
                                    </select>
								</div>
								<div class="form-group">
									<label class="control-label">Classe</label>
									<select name="classe" class="form-control">
										<?php
											$ps=$pdo->prepare("SELECT * FROM classe");
											$ps->execute();
											?>
												<option disabled="disabled">
													Choisissez une rubrique
												</option>
												<?php
											while ($s=$ps->fetch(PDO::FETCH_OBJ)) {
												?>
												<option>
													<?php echo $s->libelle; ?>
												</option>
												<?php
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label">Option</label>
									<select name="option" class="form-control">
										<?php
											$ps=$pdo->prepare("SELECT * FROM option");
											$ps->execute();
											?>
												<option disabled="disabled">
													Choisissez une rubrique
												</option>
												<?php
											while ($s=$ps->fetch(PDO::FETCH_OBJ)) {
												?>
												<option>
													<?php echo $s->libelle; ?>
												</option>
												<?php
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label">Telephone (Whatsapp)</label>
									<input
										type="number"
										class="form-control form-control-lg"
										placeholder="Numéro de Telephone" name="tel" value="<?= $userinfo['tel'] ?>"
									/>
								</div>
								<div class="form-group">
									<label class="control-label">Adresse</label>
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="Adresse Complète" name="adresse" value="<?= $userinfo['adresse'] ?>"
									/>
								</div>
								<div class="form-group">
									<label class="control-label">Montant($)</label>
									<input
										type="number"
										class="form-control form-control-lg"
										placeholder="montant" name="montant" value="<?= $userinfo['montant'] ?>"
									/>
								</div>
								<div class="form-group">
									<label class="control-label">Année Scolaire</label>
									<input
										type="text"
										class="form-control form-control-lg"
										placeholder="annee_scolaire" name="annee_scolaire" value="<?= $userinfo['annee_scol'] ?>"
									/>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
											<button
												class="btn btn-primary btn-lg btn-block"
												type="submit" name="envoie"
												>Editer</button
											>
										</div>
									</div>
								</div>
							</form>
							<?php if(isset($erreur))
								echo "<font color='red'>".$erreur."</font>";
							 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- welcome modal start -->
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
