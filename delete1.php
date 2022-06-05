<?php

$bdd= null;

try{
  $bdd= new PDO('mysql:host=localhost; dbname=test','root','');
}catch(Exception $e){

  die('Erreur:'.$e->getMessage());
}
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $req="DELETE FROM tabl WHERE id= $id";
    $bdd->exec($req);
}

header('location: listech.php');



?>