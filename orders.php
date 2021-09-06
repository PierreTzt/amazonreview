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
				<h1 class="d-flex text-white fw-bolder my-1 fs-3">Toutes les commandes</h1>
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
					<li class="breadcrumb-item text-white opacity-75">Toutes les commandes</li>
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
					<div class="row gy-5 g-xxl-12">
             <!--begin::Col-->
								<div class="col-xxl-12">
									<!--begin::Tables Widget 9-->
									<div class="card card-xxl-stretch mb-5 mb-xxl-12">
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
													$db = App::getDatabase()->query("SELECT * FROM products WHERE username=$utilisateur ORDER BY review_date DESC");
													while ($info = $db->fetch(PDO::FETCH_ASSOC)) {
													$review_date = date_create($info['review_date']);
													$eta = $info['eta'];													
													if( $eta <= 1 ) {
														$eta_info = 'Commande effectuée';
														$eta_bar = '14.28';
														$eta_color = 'primary';}
													else if( $eta <= 2 ) {
														$eta_info = 'Expédié';
														$eta_bar = '28.56';
														$eta_color = 'info';}
													else if( $eta <= 3 ) {
														$eta_info = 'En cours de livraison';
														$eta_bar = '42.84';
														$eta_color = 'info';}
													else if( $eta <= 4 ) {
														$eta_info = 'En attente de l\' avis';
														$eta_bar = '57.12';
														$eta_color = 'warning';}
													else if( $eta <= 5 ) {
														$eta_info = 'Avis posté';
														$eta_bar = '71.4';
														$eta_color = 'warning';}
													else if( $eta <= 6 ) {
														$eta_info = 'En attente du remboursement';
														$eta_bar = '85.68';
														$eta_color = 'danger';}
													else if( $eta <= 7 ) {
														$eta_info = 'Remboursé';
														$eta_bar = '100';
														$eta_color = 'success';}
													else if( $eta <= 8 ) {
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