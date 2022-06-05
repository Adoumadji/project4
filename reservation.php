<?php
try{
    $bdd= new PDO('mysql:host=localhost; dbname=test','root','');
}
catch(Exception $e){
    die('Erreur:' .$e->getMessage());
}
$req="INSERT INTO tabl(nom,numero,somme,date,destination) VALUE('".$_POST["nom"]."','".$_POST["numero"]."','".$_POST["somme"]."','".$_POST["date"]."','".$_POST["destination"]."')";
$donnee=$bdd->exec($req);
header('location: gestionnaire.php')
?>