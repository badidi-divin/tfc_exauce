<?php session_start(); 
	require_once('../bdd/connexion.php');
	require_once('../model/select-eleve.php');
	$nblmd=$pdo->prepare('SELECT SUM(montant) AS prix_total FROM eleve');
     $nblmd->execute();
     $nblmd=$nblmd->fetch()['prix_total'];

?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once('head.php'); ?>
	</head>
	<body>
		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form action="" method="GET">
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Mettez le code de l'élève" name="motcle" value="<?php echo ($mc) ?>" 
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="ion-arrow-down-c"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-name"><?= $_SESSION['nom_utilisateur']." (".$_SESSION['role'].")" ?></span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="edition-profil.php"
								><i class="dw dw-user1"></i> Edition du Profile</a
							>
							<a class="dropdown-item" href="deconnection.php"
								><i class="dw dw-logout"></i> Se Déconnecter</a
							>
							<a class="dropdown-item" href="profile.php"
								><i class="dw dw-logout"></i> Retour dans profile</a
							>
						</div>
					</div>
				</div>
				<div class="github-link">
					<a href="#" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="#">
					Tableau de Bord
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<?php require_once('menu.php'); ?>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">LISTE DES ELEVES DE SAINTE GERMAINE &nbsp;&nbsp;
										<a href="add-eleve.php" class="btn btn-outline-success">Ajouter</a>
										&nbsp;&nbsp;
										<a href="imprimer-eleve.php" class="btn btn-outline-primary">Imprimer</a></div>
					<div class="table-responsive table--no-card m-b-30">
						<table class="data-table table nowrap">
							<thead>
								
								<tr>
									<th class="table-plus">CODE</th>
									<th>NOM COMPLET</th>
									<th>SEXE</th>
									<th>CLASSE</th>
									<th>OPTION</th>
									<th>NUMERO WHATSAPP</th>
									<th>ADRESSE</th>
									<th>MONTANT A PAYER</th>
									<th>ANNEE SCOLAIRE</th>
									<th class="datatable-nosort"></th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$ps->fetch()){?>
								<tr>
									<td><?php  echo($et['code_eleve'])?></td>
									<td><?php  echo($et['nom'])." ".($et['postnom'])." ".($et['prenom'])?></td>
									<td><?php  echo($et['sexe'])?></td>
									<td><?php  echo($et['classe'])?></td>
									<td><?php  echo($et['option'])?></td>
									<td><a href="https://api.whatsapp.com/send?phone=+<?php echo($et['tel'])?>&text=Bonjour chers parents...&source=&data=" target="_blank">+<?php  echo($et['tel'])?></a></td>
									<td><?php  echo($et['adresse'])?></td>
									<td><?php if ($et['montant']==0) {
											echo "<font color='green'>".'En Ordre'."</font>";
										}else{?>
											<?php  echo($et['montant']."$")?>
								<?php } ?></td>
									<td><?php  echo($et['annee_scol'])?></td>
									<td><a onclick="return confirm('Etes-vous sûre...?');" href="../model/supprimer-eleve.php?id=<?php echo($et['code_eleve'])?>" class="btn btn-danger">Supprimer</a></td>
								<td>
								<a href="./editer-eleve.php?id=<?php echo($et['code_eleve'])?>" class="btn btn-primary">Editer</a>
								</td>
								<td>
								<a href="./impression-code.php?id=<?php echo($et['code_eleve'])?>" class="btn btn-primary">Imprimer Situation des Frais</a>
								</td>
											</tr>	
									<?php } ?>	
							</tbody>
							<tfoot style="background: black; color:white;font-size: 17px !important;text-align: center !important;">
                                            <tr>
                                                <th colspan="4" style="text-align: center;">Montant Total A Payer(<?php echo $nblmd."$";?>)</th>
                                            </tr>
                                        </tfoot>
						</table>
						
					</div>
				</div>

				<div class="footer-wrap pd-20 mb-20 card-box">
					Sainte Germaine - Ce site a été developpé par
					<a href="#"
						>Exaucé TSHIBANGU KAZADI</a
					>
				</div>
			</div>
		</div>

		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="vendors/scripts/dashboard3.js"></script>
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
