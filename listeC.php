<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$bdd = null;
try {
    $bdd = new PDO('mysql:host=localhost; dbname=test', 'root', '');
} catch (Exception $e) {
    die('Erreur' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM tabl');
$result = $reponse->fetchAll();


?>
<body>
    <style>
        table{
            text-align: center;
        }
        nav{
            width: 900px;
            background-color: blue;
        }


    </style>
      <header>
          <nav>
              <li></li>
              <li></li>
              <li></li>
          </nav>
      </header>


<table border='1' width="500px" padding-right="350px" style="border-collapse: collapse;">
<tr>
    <td>NOM</td>
    <td>NUMERO</td>
    <td>DATE</td>
    <td>DESTINATION</td>
    <td>SOMME</td>
</tr>
        <?php
        foreach ($result as $data) {



        ?>
            <tr>
                <th><?= $data['nom'] ?></th>
                <th><?= $data['numero'] ?></th>
                <th><?= $data['date'] ?></th>
                <th><?= $data['destination'] ?></th>
                <th><?= $data['somme'] ?></th>
                <th>     
            </tr>
        <?php
        }
        ?>

    </table>
    
</body>
</html>