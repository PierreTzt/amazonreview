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
								<!--begin::Input group-->
								<!--begin::Nom du produit-->
                               	<div class="fv-row mb-10">
                               		<!--begin::Label-->
									<label class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span class="required">Nom du produit</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Nom ou type d'objet"></i>
									</label>
									<!--end::Label-->
                               		<!--begin::Input-->
									<input type="text" id="name" class="form-control form-control-lg form-control-solid" name="name" required="true"/>
										<!--end::Input--> 
                           	    </div>
								<!--end::Nom du produit-->
								<!--begin::Date d'achat du produit-->
								<div class="fv-row mb-10">
                               		<!--begin::Label-->
									<label class="form-label">
										<span class="required">Date d'achat</span>
									</label>
									<!--end::Label-->
                               		<!--begin::Input-->
									<input type="date" id="purchase_date" class="form-control form-control-solid" name="purchase_date" required="true"/>
									<!--end::Input-->
								</div>
								<!--end::Date d'achat du produit-->
								<!--begin::Date de l'avis-->
								<div class="fv-row mb-10">
                               		<!--begin::Label-->
									<label for class="form-label">
										<span class="required">Date prévu de mise en ligne de l'avis</span>
									</label>
									<!--end::Label-->
                               		<!--begin::Input-->
									<input type="date" id="review_date" class="form-control form-control-solid" name="review_date"/>
									<!--end::Input-->
								</div>
								<!--end::Date de l'avis-->
								<!--begin::Prix du produit-->
								<div class="fv-row mb-10">
                               		<!--begin::Label-->
									<label class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span class="required">Prix du produit</span>
									</label>
									<!--end::Label-->
                               		<!--begin::Input-->
									<input type="text" id="price" class="form-control form-control-lg form-control-solid" name="price" required="true"/>
										<!--end::Input--> 
                           	    </div>
								<!--end::Prix du produit-->
						</div>
					</div>                                          
				</div>
      		</div>
			<!--end::Tables Widget 9-->
			<!--begin::Col-->
			<div class="col-xl-6">
				<!--begin::Tables Widget 9-->
				<div class="card card-xxl-stretch mb-5 mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Informations optionnelles</span>
						</h3>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Input group-->
							<!--begin::Lien du produit-->
							<div class="fv-row mb-10">
                          		<!--begin::Label-->
								<label for="url" class="d-flex align-items-center fs-5 fw-bold mb-2">
									<span>Lien du produit</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Adresse web venant sur site Amazon"></i>
								</label>
								<!--end::Label-->
                                <!--begin::Input-->
									<input type="text" id="url" class="form-control form-control-lg form-control-solid" name="url" required="false" placeholder="" value="" />
								<!--end::Input--> 
                       	    </div>
							<!--end::Lien du produit-->
							<!--begin::Prévu d'être revendu-->
							<div class="form-check form-switch form-check-custom form-check-solid me-10">
								<input class="form-check-input h-20px w-30px" type="checkbox" value="1" id="resale" name="resale"/>
    							<label class="form-check-label" for="resale">
        							Prévu d'être revendu
    							</label>
							</div>
							<!--end::Prévu d'être revendu-->
							<!--begin::Attente du vendeur-->
							<div class="fv-row mb-10">
									<span class="card-label fw-bolder fs-3 mb-1">Attente du vendeur en plus de l'avis</span>
								</div>
								<div class="form-check form-switch form-check-custom form-check-solid me-10">
									<input type="hidden" value="1" id="1" name="expectancy[]" >
    								<input class="form-check-input h-20px w-30px" type="radio" value="2" id="photos" name="expectancy[]"/>
									<label for="photos" class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span>Photos</span>
									</label>
									<input class="form-check-input h-20px w-30px" type="radio" value="3" id="video" name="expectancy[]"/>
									<label for="video" class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span>Vidéo</span>
									</label>
								</div>
								<!--end::Attente du vendeur-->
								<!--begin::Type de remboursement-->
								<div class="fv-row mb-10">
									<span class="card-label fw-bolder fs-3 mb-1">Type de Remboursement</span>
								</div>
								<div class="form-check form-switch form-check-custom form-check-solid me-10">
									<input class="form-check-input h-20px w-30px" type="radio" value="1" id="full_refund" name="refund_type[]" checked/>
									<label for="full_refund" class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span>Remboursement complet</span>
									</label>
    								<input class="form-check-input h-20px w-30px" type="radio" value="2" id="partial_refund" name="refund_type[]"/>
    								<label for="partial_refund" class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span>Remboursement partiel</span>
    								</label>
    								<input class="form-check-input h-20px w-30px" type="radio" value="3" id="gift_card" name="refund_type[]"/>
									<label for="gift_card" class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span>Carte cadeau</span>
    								</label>
								</div>
								<!--end::Type de remboursement-->
								<!--begin::Nom du vendeur-->
							<div class="fv-row mb-10">
                          		<!--begin::Label-->
								<label for="seller_name" class="d-flex align-items-center fs-5 fw-bold mb-2">
									<span>Nom du vendeur</span>
								</label>
								<!--end::Label-->
                                <!--begin::Input-->
									<input type="text" id="seller_name" class="form-control form-control-lg form-control-solid" name="seller_name" required="false" placeholder="" value="" />
								<!--end::Input--> 
                       	    </div>
							<!--end::Nom du vendeur-->
							<!--begin::Nom du vendeur-->
							<div class="fv-row mb-10">
                          		<!--begin::Label-->
								<label for="seller_url" class="d-flex align-items-center fs-5 fw-bold mb-2">
									<span>Lien du profil du vendeur</span>
								</label>
								<!--end::Label-->
                                <!--begin::Input-->
									<input type="text" id="seller_url" class="form-control form-control-lg form-control-solid" name="seller_url" required="false" placeholder="" value="" />
								<!--end::Input--> 
                       	    </div>
							<!--end::Nom du vendeur-->
								<!--begin::Champ caché pour l'id de l'utilisateur-->
							<?php echo '<input id="username" name="username" type="hidden" value="' .$_SESSION['auth']->id. '">';?>
							<!--end::Champ caché pour l'id de l'utilisateur-->
							<div class="center-btn" style="position:relevant; height:5vh;">
          						<input class="btn btn-primary" type="submit" value="Envoyer">
							</div>
							<!--end::Table container-->
						</div>
						<!--begin::Body-->
					</div>
					<!--end::Tables Widget 9-->
				</div>
				</form>
				<!--end::Col-->
			</div>
		<!--end::Row-->
	</div>
	<!--end::Post-->
</div>
<!--end::Container-->
</div>
<?php require 'inc/footer.php'; ?>