<?php
try{
   $db = new PDO('mysql:host=localhost;dbname=amazonreview', 'root', '');
}catch(Exception $e){
   echo "Échec : " . $e->getMessage();
}
?>