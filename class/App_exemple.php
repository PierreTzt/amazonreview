<?php
class App{

    static $db = null;

    static function getDatabase(){
        if(!self::$db){
            self::$db = new Database('root', '', 'amazonreview');
        }
        return self::$db;
    }

    static function getAuth(){
        return new Auth(Session::getInstance(), ['restriction_msg' => 'La connexion a échouée, merci de réessayer']);
    }

    static function redirect($page){
        header("Location: $page");
        exit();
    }

}