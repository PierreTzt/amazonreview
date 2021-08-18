<?php
require 'inc/bootstrap.php';
$auth = App::getAuth();
$db = App::getDatabase();
$auth->connectFromCookie($db);
if($auth->user()){
    App::redirect('dashboard.php');
}
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $user = $auth->login($db, $_POST['username'], $_POST['password'], isset($_POST['remember']));
    $session = Session::getInstance();
    if($user){
        $session->setFlash('success', 'Vous êtes maintenant connecté');
        App::redirect('dashboard.php');
    }else{
        $session->setFlash('danger', 'Identifiant ou mot de passe incorrecte');
    }
}
?>
<?php require 'inc/header.php'; ?>

    <h1>Se connecter</h1>

    <form action="" method="POST">

        <div class="form-group">
            <label for="">Pseudo ou email</label>
            <input type="text" name="username" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="">Mot de passe <a href="forget.php">(J'ai oublié mon mot de passe)</a></label>
            <input type="password" name="password" class="form-control"/>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="remember" value="1"/> Se souvenir de moi
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Se connecter</button>

    </form>

<?php require 'inc/footer.php'; ?>