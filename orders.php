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
					<a href="#" class="btn btn-bg-white btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Ajouter une commande</a>
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
													$db = App::getDatabase()->query("SELECT * FROM products WHERE username=$utilisateur ORDER BY id DESC");
													while ($info = $db->fetch(PDO::FETCH_ASSOC)) {
													$review_date = date_create($info['review_date']);
													echo
													//begin::Table body
													'<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-11.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">'. $info['name'] .'</a>
																		<a href="'. $info['url'] .'&tag=infoelections-21" class="text-muted fw-bold text-muted d-block fs-7">Lien Amazon : <i class="fab fa-amazon"></i></a>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">'. $info['price'] .' €</a>
																<a href="'. $info['seller_url'] .'" class="text-muted fw-bold text-muted d-block fs-7">'. $info['seller_name'] .'</a>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																	<span class="text-muted me-2 fs-7 fw-bold">'. $info['condition'] .'test</span>
																	<span class="text-muted me-2 fs-7 fw-bold">'. date_format($review_date, 'd/m') .'</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
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