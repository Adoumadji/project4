
<!DOCTYPE html>
<html lang="en">
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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    nav {
        background-color: blue;
        width: "700px";
        padding-right: 350px;

    }

    form {
        text-align: center;
       

    }

    form{
    background :linear-gradient( darkturquoise, white ) ;
    margin: 0 auto;
   
    /*forme outline*/
    padding: 1em;
    
    border-radius: 1em;
   
}
label{
    display: inline-flex;
    width: 90px;
    text-align:right;
    padding: 1px;
}
input{

font: 1em sans-serif;
box-sizing: border-box;
border: 2px solide #999;
margin: 4px;
}
#btn{

    width: 150px;
    height: 35px;
    background-color: blue;
    padding-right: 22px;
}
        

    }
</style>

<body>
    <header>
        <nav>
            <li></li>
            <li></li>
            <li></li>
        </nav>
    </header>
    <form action="reservation.php" method="post">
    <label for="">NOM</label>  <input type="int" name="nom"><br>
       <label for="">NUMERO</label>  <input type="int" name="numero"><br>
       <label for="">FRAIS</label> <input type="INT" name="somme"><br>
       <label for="">DATE</label><input type="date" name="date"><br>
       <label for="">DESTINATION</label><input type="text" name="destination"><br>
        <input type="submit" value="valider" id="btn">
    </form>
    <table border='1' width="500px" padding-right="350px" style="border-collapse: collapse;">
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
                    <a href="delete.php?id=<?=$data['id'] ?>">
                        Suprimer
                    </a>
                </th>
                <th>
                    <a href="update.php?id=<?= $data['id'] ?>">
                        modifier
                    </a>
                </th>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>