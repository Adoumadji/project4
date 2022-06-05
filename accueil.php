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
        form{
    background :linear-gradient( darkturquoise, white ) ;
    margin: 0 auto;
    width: 100%;
    height: 500px;
    /*forme outline*/
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 1em;
    border: 3px solid rgb(34, 68, 221);
    padding-bottom: 40px;
    text-align: center;
}
a{
    padding: 6px;
}
    </style>
    <form action="">

    
    <?php
    try{
        $bdd=new PDO('mysql: host=localhost; dbname=inscription','root','');
    }
    catch(Exception $e){

     die('Erreur:'.$e->getMessage());
    }
  $reponse=$bdd->query('SELECT id, nom,numero,DATE_FORMAT(date ,\' %d/%m/%Y  %Hh%imin%ss\') AS date,destination FROM tabl');
        if($donnee=$reponse->fetch()){
            ?>

            <table border="1">
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
                    <td><a href="delete.php?id=<?= $donnee['id'] ?>">effacer</a><a href="update.php?id=<?= $donnee['id'] ?>">modification</a></td>
                </tr>


            </table>

            <?php   

        }
    
    
    
    ?>
    </form>



    
</body>
</html>