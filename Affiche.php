<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    try{
        $bdd=new PDO('mysql: host=localhost; dbname=inscription','root','');
    }
    catch(Exception $e){

     die('Erreur:'.$e->getMessage());
    }
  $reponse=$bdd->query('SELECT * FROM tabl');
        if($donnee=$reponse->fetch()){
            ?>

    
                <tr>
                <th>ID</th>
                    <th>NOM</th>
                    <th>NUMERO</th>
                    <th>SOMME</th>
                    <th>DATE</th>
                    <th>DESTINATION</th>
                    <th>ACTION</th>
                </tr>
                <tr> 
                <td><?= $donnee['id']?></td>
                    <td><?= $donnee['nom']?></td>
                    <td><?= $donnee['numero']?></td>
                    
                    <td><?= $donnee['date']?></td>
                    <td><?= $donnee['destination']?></td>
                   
                </tr>


        

            <?php   

        }
    
    
    
    ?>
    
</body>
</html>