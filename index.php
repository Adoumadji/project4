<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    
        h3{
            width: 400px;
            height: 22px;
            background-color: blue;
            }
        p{
            width: 400px;
            height: 100px;
 
    background :linear-gradient( darkturquoise, white ) ;;
        }
    </style>
    <h1>vos billets</h1>
    <?php
    try{
        $bdd= new PDO('mysql:host=localhost; dbname=test','root','');
    }catch(Exception $e){
        die('Erreur:'. $e->getMessage());
    }
    $req = $bdd->query('SELECT nom,numero,somme,date,destination,DATE_FORMAT(date ,\' %d/%m/%Y  %Hh%imin%ss\') AS date FROM tabl ORDER BY date DESC LIMIT 0,
          5');
    while($reponse=$req->fetch()){ 
        ?>
        <h3>billet</h3>
        <em> <?= $reponse['date']?></em>
        </h3>
        <p>
            nom <?= $reponse['nom']?><br>
          numero <?= $reponse['numero']?><br>
          somme <?= $reponse['somme']?>FCFA<br>
        
        <em><a href="reservation1.html">reservation</a></em>
        </p> 
        <?php
    }
    ?>
    
</body>
</html>