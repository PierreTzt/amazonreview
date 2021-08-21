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
													<div class="text-muted fs-7 fw-bold">La dernière commande est de 20 €</div>
												</div>
											<div class="fw-bolder fs-3 text-primary">24,500 €</div>
										</div>
									</div>
									<!--end::Stats-->
									<!--begin::Chart-->
										<div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
									<!--end::Chart-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Mixed Widget 7-->
							<!--begin::List Widget 3-->
							<div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
								<!--begin::Header-->
								<div class="card-header border-0">
									<h3 class="card-title fw-bolder text-dark">Todo</h3>
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
												<span class="card-label fw-bolder fs-3 mb-1">Statistiques des commandes</span>
												<span class="text-muted mt-1 fw-bold fs-7">Voici vos 6 dernieres commandes</span>
											</h3>
											<div class="card-toolbar"  data-bs-placement="top" data-bs-trigger="hover">
												<a href="orders.php" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
												<!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->Voir toutes les commandes</a>
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
															<th class="w-25px">
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
																</div>
															</th>
															<th class="min-w-150px">Nom du produit</th>
															<th class="min-w-140px">Prix</th>
															<th class="min-w-120px">Etats</th>
															<th class="min-w-100px text-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<?php
													$db = App::getDatabase()->query("SELECT * FROM products WHERE username=$utilisateur ORDER BY id DESC LIMIT 6");
													while ($info = $db->fetch(PDO::FETCH_ASSOC)) {
													echo
													//begin::Table body
													'<tbody>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
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
																<span class="text-muted fw-bold text-muted d-block fs-7">'. $info['name'] .'</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">'. $info['name'] .'</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
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