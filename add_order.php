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
									<input type="date" id="purchase_date" class="form-control form-control-solid" name="purchase_date"/>
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
								<!--begin::Attente du vendeur-->
								<div class="fv-row mb-10">
									<span class="card-label fw-bolder fs-3 mb-1">Attente du vendeur</span>
								</div>
								<div class="form-check form-switch form-check-custom form-check-solid">
    								<input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitch30x50"/>
    								<label class="form-check-label" for="flexSwitch20x30">Avis</label>
								</div>
								<div class="form-check form-switch form-check-custom form-check-solid">
    								<input class="form-check-input h-30px w-50px" type="checkbox" value="" id="flexSwitch30x50"/>
    								<label class="form-check-label" for="flexSwitch30x50">Photos</label>
								</div>
								<div class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input h-40px w-60px" type="checkbox" value="" id="flexSwitch40x60"/>
    <label class="form-check-label" for="flexSwitch40x60">Vidéos</label>
								</div>
								<!--end::Attente du vendeur-->
								<div class="fv-row mb-10">
									<span class="card-label fw-bolder fs-3 mb-1">Type de Rembousement</span>
								</div>
								<div class="form-check form-switch form-check-custom form-check-solid me-10">
    								<input class="form-check-input h-30px w-50px" type="checkbox" value="" id="flexSwitch20x30"/>
    								<label class="form-check-label" for="flexSwitch20x30">
        								Rembousement complet
    								</label>
								</div>
								<div class="form-check form-switch form-check-custom form-check-solid me-10">
    								<input class="form-check-input h-30px w-50px" type="checkbox" value="" id="flexSwitch20x30"/>
    								<label class="form-check-label" for="flexSwitch20x30">
        								Rembousement partiel
    								</label>
								</div>
								<div class="form-check form-switch form-check-custom form-check-solid me-10">
    								<input class="form-check-input h-30px w-50px" type="checkbox" value="" id="flexSwitch20x30"/>
    								<label class="form-check-label" for="flexSwitch20x30">
        								Carte cadeau
    								</label>
								</div>
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
							<div class="form-check form-switch form-check-custom form-check-solid me-10">
    							<input class="form-check-input h-30px w-50px" type="checkbox" value="" id="flexSwitch20x30"/>
    							<label class="form-check-label" for="flexSwitch20x30">
        							Prévu d'être revendu
    							</label>
							</div>
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