<?php
$host='localhost';
$port=80;
$bdname='CHAUFFEUR';
$user='root';
$pwd=' '
try {
    $newBD=new PDO('mysql:host=$port;port=$port;name=$name',$user,$pwd);
    echo"connection étalie"
} catch (PDOExeception $e) {
die
}
?>