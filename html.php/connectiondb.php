<?php
try {
    $host = "localhost";
    $db = "nike";
    $user = "root" ;
    $pass = "";
    $connection = new PDO("mysql:host=$host ; dbname =$db ",$user , $pass);
} catch (PDOException $e) {
    die("Erreur : ".$e->getMessage());
}
?>