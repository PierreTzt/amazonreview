<?php
require 'inc/bootstrap.php';
$db = App::getDatabase();

if(App::getAuth()->confirm($db, $_GET['id'], $_GET['token'], Session::getInstance())){
    Session::getInstance()->setFlash('danger', "Votre compte a bien été validé");
    App::redirect('account.php');
}else{
    Session::getInstance()->setFlash('danger', "Ce token n'est plus valide");
    App::redirect('login.php');
}