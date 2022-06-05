<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        form{
    background :linear-gradient( darkturquoise, white ) ;
    margin: 0 auto;
    width: 700px;
    height: 500px;
    /*forme outline*/
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 1em;
    border: 3px solid rgb(34, 68, 221);
    padding-bottom: 40px;
    text-align: center;
}
#a{

    width: 20px;
    height: 10px;
    text-align: center;
    margin-top: 20px;
}
    </style>
    <form action="chaufmode.php" method="post">
        <label for="">votre mot de passe</label>
        <input type="password" name="motde" id="">
        <input type="submit" value="valider"><br>
        <?php
    if(isset($_POST['motde'])  AND $_POST['motde']=="projet"){
        header('location: listech.php');
    }
    else{
    
         echo'mot de passe incorrect';    
    
    }
    
    ?>
    </form>
  
    
</body>
</html> 