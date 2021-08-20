<?php
require 'inc/bootstrap.php';
App::getAuth()->restrict();
require 'inc/header.php';
?>

<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container d-flex flex-stack flex-wrap">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column me-3">
			<!--begin::Title-->
			<h1 class="d-flex text-white fw-bolder my-1 fs-3">Ajouter une commande</h1>
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
				<li class="breadcrumb-item text-white opacity-75">Ajout de commande</li>
			<!--end::Item-->
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title-->
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
			<div class="col-xl-6">
				<!--begin::Tables Widget 9-->
				<div class="card card-xxl-stretch mb-5 mb-xl-8">
					<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-1">Informations obligatoire sur la commande</span>
							</h3>
						</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<div class="table-responsive">
							<form action="add_confirm.php" method="post" class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                    	      	<!--<div class="contact row body" id="contact_body">-->
                               	<!--<div class="contact-elements">-->
                                <!--<div class="w-100">-->
								<!--begin::Input group-->
                               	<div class="fv-row mb-10">
                               		<!--begin::Label-->
									<label for="date_commande" class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span class="required">Nom du produit</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Nom ou type d'objet"></i>
									</label>
									<!--end::Label-->
                               		<!--begin::Input-->
									<input type="text" id="nom" class="form-control form-control-lg form-control-solid" name="nom" required="true" placeholder="" value="" />
										<!--end::Input--> 
                           	    </div>
								<div class="fv-row mb-10">
                               		<!--begin::Label-->
									<label for="date_commande" class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span>Lien du produit</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Adresse web venant sur site Amazon"></i>
									</label>
									<!--end::Label-->
                                    <!--begin::Input-->
									<input type="text" id="url" class="form-control form-control-lg form-control-solid" name="url" required="false" placeholder="" value="" />
									<!--end::Input--> 
                          	    </div>
								<div class="fv-row mb-10">
                               		<!--begin::Label-->
									<label for class="form-label">
										<span>Date d'achat</span>
									</label>
									<!--end::Label-->
                               		<!--begin::Input-->
									<input type="date" class="form-control form-control-solid" placeholder="Pick date rage" id="kt_inputmask_1" inputmode="text" name="date_achat"/>
									<!--end::Input-->
								</div>
								<div class="fv-row mb-10">
                               		<!--begin::Label-->
									<label for class="form-label">
										<span>Date prévu de mise en ligne de l'avis</span>
									</label>
									<!--end::Label-->
                               		<!--begin::Input-->
									<input type="date" class="form-control form-control-solid" placeholder="Pick date rage" id="kt_inputmask_1" inputmode="text" name="date_review"/>
									<!--end::Input-->
								</div>
								<div class="fv-row mb-10">
                               		<!--begin::Label-->
									<label for class="form-label">
										<span>Date prévu de mise en ligne de l'avis</span>
									</label>
									<!--end::Label-->
                               		<!--begin::Input-->
									<input type="date" class="form-control form-control-solid" placeholder="Pick date rage" id="kt_inputmask_1" inputmode="text" name="date_review"/>
									<!--end::Input-->
								</div>
                            </div>
						</div>                                          
             
              <label for="url">Type de demande</label>
              <input type="text" id="demande" name="demande"  class="form-control">
              </p>
              <p>   
              <label for="url">Prévu d'etre revendu</label>
              <input type="text" id="revente" name="revente"  class="form-control">
              </p>
              <p>   
              <label for="url">Remboursement complet</label>
              <input type="text" id="remboursement_complet" name="remboursement_complet"  class="form-control">
              </p>
              <p>   
              <label for="url">Frais PayPal</label>
              <input type="text" id="frais_paypal" name="frais_paypal" class="form-control">
              </p>
              <p>   
              <label for="url">Etat de la commande</label>
              <input type="text" id="etat" name="etat" class="form-control">
              <?php echo '<input id="username" name="username" type="hidden" value="' .$_SESSION['auth']->id. '">';?>
              </p>
              <div class="center-btn" style="position:relevant; height:5vh;">
          </ul>
      </div>
      <div class="center-btn" style="position:relevant; height:5vh;">
          <input class="btn btn-primary" type="submit" value="Envoyer">
          </form>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 9-->
								</div>
								<!--end::Col-->
                                <!--begin::Col-->
								<div class="col-xl-6">
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
												<!--begin::Input group-->
												<div class="fv-row mb-10">
                                                		<!--begin::Label-->
														<label for="date_commande" class="d-flex align-items-center fs-5 fw-bold mb-2">
															<span class="required">Nom du produit</span>
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
														</label>
														<!--end::Label-->
                                                		<!--begin::Input-->
														<input type="text" id="nom" class="form-control form-control-lg form-control-solid" name="nom" required="true" placeholder="" value="" />
														<!--end::Input--> 
                                            	    </div>
													<div class="fv-row mb-10">
                                                		<!--begin::Label-->
														<label for="date_commande" class="d-flex align-items-center fs-5 fw-bold mb-2">
															<span>Lien du produit</span>
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
														</label>
														<!--end::Label-->
                                                		<!--begin::Input-->
														<input type="text" id="url" class="form-control form-control-lg form-control-solid" name="url" required="false" placeholder="" value="" />
														<!--end::Input--> 
                                            	    </div>
													<div class="fv-row mb-10">
                                                		<!--begin::Label-->
														<label for class="form-label">
															<span>Date d'achat</span>
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
														</label>
														<!--end::Label-->
                                                		<!--begin::Input-->
														<input type="date" class="form-control form-control-solid" placeholder="Pick date rage" id="kt_inputmask_1" inputmode="text" name="date_achat"/>
														<!--end::Input-->
</div>
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