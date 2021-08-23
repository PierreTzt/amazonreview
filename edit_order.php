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
			<h1 class="d-flex text-white fw-bolder my-1 fs-3">Voir une commande</h1>
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
				<li class="breadcrumb-item text-white opacity-75">Voir de commande</li>
			<!--end::Item-->
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title-->
	</div>
	<!--end::Container-->
</div>
<!--end::Toolbar-->

<?php
    $id=$_GET['id'];
    $db = App::getDatabase()->query('SELECT * FROM products WHERE id = 71');

    //$infos = $db->execute( array( ':id' => $id ));
//    $db->execute(array($_GET['id']));
		
foreach ($db->result() as $row) {
    $info = $row->id;
}


    while ($infos = $db->fetch())
    {

      ?>
 <?php echo $infos['order_date'];?>
  <div class="contact container shadow" id="contact_form">        
  <div class="contact row header">
      <h2>Modification de commande</h2>
      <div id="contact_results"></div>
  </div>
<form action="edit_confirm.php?id=4" method="post">
  <div class="contact row body" id="contact_body">
      <div class="contact-elements">
          <ul>
              <li>
              <p class="left">   
              <label for="date_commande">Nom du produit : <span class="req">*</span></label>
              <input type="text" id="nom" value="<?php echo $infos['name'];?>"name="nom" class="input-field" required="true">
              </p>
              <p class="pull-right">   
              <label for="date_commande">Prix : <span class="req">*</span></label>
              <input type="text" id="prix" value="<?php echo $infos['price'];?>" name="prix" class="input-field" required="true">
              </p>
              <p>   
              <label for="url">URL</label>
              <input type="text" id="url" value="<?php echo $infos['url'];?>" name="url" class="input-field" required="true">
              </p>
              </li>
              <p class="left">   
              <label for="date_commande">Date d'achat : <span class="req">*</span></label>
              <input type="date" id="date_achat" value="<?php echo $infos['order_date'];?>" name="date_achat" class="input-field" required="true">
              </p>
              <p class="pull-right">
              <label for="date_review">Date de review : <span class="req">*</span></label>
              <input type="date" id="date_review" value="<?php echo $infos['review_date'];?>" name="date_review" class="tel-number-field long" required="true">
              </p>
              </li>
              <div class="center-btn" style="position:relevant; height:5vh;">
          </ul>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="center-btn" style="position:relevant; height:5vh;">
          <li>
          <input class="btn btn-submit" type="submit" value="Envoyer">

          </form>
          <?php
    



    }
?>


<?php require 'inc/footer.php'; ?>