<?php
try {
    $bdd = new PDO('mysql: host=localhost; dbname=test', 'root', '');
} catch (Exception $e) {

    die('Erreur:' . $e->getMessage());
}
$result  = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tabl WHERE ID =$id";
    $stm = $bdd->query($sql);
    $result = $stm->fetch();
}
if ($_POST) {
    $id = $_GET['id'];
    $nom = $_POST['nom'];
    $numero = $_POST['numero'];
    $somme = $_POST['somme'];
    $date = $_POST['date'];
    $destination = $_POST['destination'];
    $req="UPDATE tabl SET nom= '$nom', numero='$numero',somme= '$somme', destination= '$destination'  WHERE id=$id";
    if ($bdd->exec($req)) {
        # code...
        header('location: gestionnaire.php');
    } else {
        echo 'echec';
        var_dump($bdd->errorInfo());
    }
    
    //var_dump($_POST);
}

   //var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
    background :linear-gradient( darkturquoise, white ) ;
    margin: 0 auto;
   
    /*forme outline*/
    padding: 1em;
    border: 1px solid #ccc;
    border-radius: 1em;
    border: 3px solid rgb(34, 68, 221);
}
label{
    display: inline-flex;
    width: 90px;
    text-align:right;
    padding: 5px;
}
input{

font: 1em sans-serif;
box-sizing: border-box;
border: 2px solide #999;
margin: 20px;
}

    </style>

    <form action="" method="post">

        <input type="text" name="nom" value="<?= $result['nom'] ?>"> <br>
        <input type="number" name="numero" value="<?= $result['numero'] ?>"> <br>
        <input type="text" name="somme" value="<?= $result['somme'] ?>"> <br>
        <input type="date" name="date" value="<?= $result['date'] ?>"> <br>
        <input type="text" name="destination" value="<?= $result['destination'] ?>"> <br>
        <input type="submit" value="modifier">
    </form>
</head>

<body>

</body>

</html>