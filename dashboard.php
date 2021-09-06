<?php
require 'inc/bootstrap.php';
App::getAuth()->restrict();
require 'inc/header.php';
$utilisateur = $_SESSION['auth']->id;
?>
<!--begin::Toolbar-->
	<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container d-flex flex-stack flex-wrap">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column me-3">
				<!--begin::Title-->
				<h1 class="d-flex text-white fw-bolder my-1 fs-3">Tableau de bord</h1>
				<!--end::Title-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-white opacity-75">
					<a href="index.php" class="text-white text-hover-primary">Accueil</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-white opacity-75 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
					<li class="breadcrumb-item text-white opacity-75">Tableau de bord</li>
				<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
				<!--begin::Actions-->
				<div class="d-flex align-items-center py-3 py-md-1">
					<!--begin::Button-->
					<a href="add_order.php" class="btn btn-bg-white btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Ajouter une commande</a>
					<!--end::Button-->
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Container-->
			<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container">
				<!--begin::Post-->
				<div class="content flex-row-fluid" id="kt_content">
					<!--begin::Row-->
					<div class="row gy-5 g-xl-8">
						<!--begin::Col-->
						<div class="col-xxl-4">
							<!--begin::Mixed Widget 7-->
							<div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
								<!--begin::Body-->
								<div class="card-body d-flex flex-column p-0">
									<!--begin::Stats-->
									<div class="flex-grow-1 card-p pb-0">
										<div class="d-flex flex-stack flex-wrap">
											<div class="me-2">
												<a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Total des commandes</a>
												<?php
												// Dernière commande
												$DCdb = App::getDatabase()->query("SELECT * FROM products WHERE username=$utilisateur ORDER BY id DESC LIMIT 1");
												while ($last_order = $DCdb->fetch(PDO::FETCH_ASSOC)) {
												
												echo'<div class="text-muted fs-7 fw-bold">La dernière commande est de '. $last_order['price'] .' €</div>';
												}
												// Total des commandes
												$TCdb = App::getDatabase()->query("SELECT SUM(price) AS total_orders FROM products WHERE username=$utilisateur");
												while ($total_orders = $TCdb->fetch(PDO::FETCH_ASSOC)) {
												
												echo '</div>
												<div class="fw-bolder fs-3 text-primary">'. $total_orders['total_orders'] . ' €</div>';
												}
											?>
										</div>
									</div>
									<!--end::Stats-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Mixed Widget 7-->
							<!--begin::List Widget 3-->
							<div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
								<!--begin::Header-->
								<div class="card-header border-0">
									<h3 class="card-title fw-bolder text-dark">Avis à laisser</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-2">
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-8">
										<!--begin::Bullet-->
										<span class="bullet bullet-vertical h-40px bg-success"></span>
										<!--end::Bullet-->
										<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid mx-5">
												<input class="form-check-input" type="checkbox" value="" />
											</div>
										<!--end::Checkbox-->
										<!--begin::Description-->
											<div class="flex-grow-1">
												<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Create FireStone Logo</a>
												<span class="text-muted fw-bold d-block">Due in 2 Days</span>
											</div>
										<!--end::Description-->
										<span class="badge badge-light-success fs-8 fw-bolder">New</span>
									</div>
									<!--end:Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-8">
										<!--begin::Bullet-->
										<span class="bullet bullet-vertical h-40px bg-primary"></span>
										<!--end::Bullet-->
										<!--begin::Checkbox-->
										<div class="form-check form-check-custom form-check-solid mx-5">
											<input class="form-check-input" type="checkbox" value="" />
										</div>
										<!--end::Checkbox-->
										<!--begin::Description-->
										<div class="flex-grow-1">
											<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Stakeholder Meeting</a>
											<span class="text-muted fw-bold d-block">Due in 3 Days</span>
										</div>
										<!--end::Description-->
										<span class="badge badge-light-primary fs-8 fw-bolder">New</span>
									</div>
									<!--end:Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-8">
										<!--begin::Bullet-->
										<span class="bullet bullet-vertical h-40px bg-warning"></span>
										<!--end::Bullet-->
										<!--begin::Checkbox-->
										<div class="form-check form-check-custom form-check-solid mx-5">
											<input class="form-check-input" type="checkbox" value="" />
										</div>
										<!--end::Checkbox-->
										<!--begin::Description-->
										<div class="flex-grow-1">
											<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Scoping &amp; Estimations</a>
											<span class="text-muted fw-bold d-block">Due in 5 Days</span>
										</div>
										<!--end::Description-->
										<span class="badge badge-light-warning fs-8 fw-bolder">New</span>
									</div>
									<!--end:Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end:List Widget 3-->
								</div>
								<!--end::Col-->
                                <!--begin::Col-->
								<div class="col-xl-8">
									<!--begin::Tables Widget 9-->
									<div class="card card-xxl-stretch mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Informations sur vos commandes</span>
												<span class="text-muted mt-1 fw-bold fs-7">Voici vos 6 dernières commandes</span>
											</h3>
											<div class="card-toolbar"  data-bs-placement="top" data-bs-trigger="hover">
												<a href="orders.php" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
												<span class="svg-icon svg-icon-3">
													<i class="fas fa-shopping-cart"></i>
												</span>
												Voir toutes les commandes</a>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bolder text-muted">
															<th class="min-w-150px">Nom du produit</th>
															<th class="min-w-140px">Prix<br>Nom du vendeur</th>
															<th class="min-w-120px">Etats<br>Date de review prevu</th>
															<th class="min-w-100px text-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<?php
													$db = App::getDatabase()->query("SELECT * FROM products WHERE username=$utilisateur ORDER BY id DESC LIMIT 6");
													while ($info = $db->fetch(PDO::FETCH_ASSOC)) {
													$review_date = date_create($info['review_date']);
													$eta = $info['eta'];													
													if( $eta = 1 ) {
														$eta_info = 'Commande effectuée';
														$eta_bar = '14.28';
														$eta_color = 'primary';}
													else if( $eta = 2 ) {
														$eta_info = 'Expédié';
														$eta_bar = '28.56';
														$eta_color = 'info';}
													else if( $eta = 3 ) {
														$eta_info = 'En cours de livraison';
														$eta_bar = '42.84';
														$eta_color = 'info';}
													else if( $eta = 4 ) {
														$eta_info = 'En attente de l\' avis';
														$eta_bar = '57.12';
														$eta_color = 'warning';}
													else if( $eta = 5 ) {
														$eta_info = 'Avis posté';
														$eta_bar = '71.4';
														$eta_color = 'warning';}
													else if( $eta = 6 ) {
														$eta_info = 'En attente du remboursement';
														$eta_bar = '85.68';
														$eta_color = 'danger';}
													else if( $eta = 7 ) {
														$eta_info = 'Remboursé';
														$eta_bar = '100';
														$eta_color = 'success';}
													else if( $eta = 8 ) {
														$eta_info = 'Renvoyé';
														$eta_bar = '100';
														$eta_color = 'danger';}
													else {
														$eta_info = 'Aucune infos';
														$eta_bar = '0';
														$eta_color = 'warning';}
													
													//begin::Table body
													echo '<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																<!--Affichage du l image du produit
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-11.jpg" alt="" />
																	</div>
																-->
																	<div class="d-flex justify-content-start flex-column">
																		<a href="view.php?id='. $info['id'] .'" class="text-dark fw-bolder text-hover-primary fs-6">'. $info['name'] .'</a>
																		<a href="'. $info['url'] .'&tag=infoelections-21" class="text-muted fw-bold text-muted d-block fs-7">Lien Amazon : <i class="fab fa-amazon"></i></a>
																	</div>
																</div>
															</td>
															<td>
																<span class="text-dark fw-bolder d-block fs-6">'. $info['price'] .' €</span>
																<a href="'. $info['seller_url'] .'" class="text-muted fw-bold text-muted d-block fs-7">'. $info['seller_name'] .'</a>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">'. $eta_info .'</span>
																		<span class="text-muted me-2 fs-7 fw-bold">'. date_format($review_date, 'd/m') .'</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-'. $eta_color .'" role="progressbar" style="width: '. $eta_bar .'%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="edit_order.php?id='. $info['id'] .'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<span class="svg-icon svg-icon-3">
																			<i class="far fa-edit"></i>
																		</span>
																	</a><!--
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																	<span class="svg-icon svg-icon-3">
																		<i class="fas fa-trash"></i>
																		</span>
																	</a>-->
																</div>
															</td> 
														</tr>';
													}
													?>
													</tbody>
													
												</table>
												<!--end::Table-->
											
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 9-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
<?php require 'inc/footer.php'; ?>