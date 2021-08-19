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
				<h1 class="d-flex text-white fw-bolder my-1 fs-3">Ajout de commande</h1>
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
					<div class="row gy-5 g-xxl-12">
                    <!--begin::Col-->
						<div class="col-xxl-12">
							<!--begin::Tables Widget 9-->
							<div class="card card-xxl-stretch mb-5 mb-xxl-12">
								<!--begin::Body-->
								<div class="card-body py-3">
									<!--begin::Table container-->
									<div class="table-responsive">
                                        <form action="add_confirm.php" method="post" class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                    	<div class="contact row body" id="contact_body">
                                        	<div class="contact-elements">
                                                <div class="w-100">
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
														<input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_inputmask_1" inputmode="text" name="date_achat"/>
														<!--end::Input--> 
														<div class="form-text">
															"custom format :"
															<code>dd/mm/yyyy</code>
														</div>
                                            	    </div>
												</div>                                          
                                                
              <p>   
              <label for="date_commande">Date de commande : <span class="req">*</span></label>
              <input type="date" id="date_achat" name="date_achat"  class="form-control" required="true">
              </p>
              <p>
              <label for="date_review">Date de review : <span class="req">*</span></label>
              <input type="date" id="date_review" name="date_review"  class="form-control" required="true">
              </p>
              <p>   
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