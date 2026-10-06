<?php 

try{
    // argomento 1 host e dbname, argomento 2 user, argomento 3 password
    $db = new PDO("mysql:host=mysql;dbname=esercitazione_l22", "user", "password");

}catch(PDOException $e){
    die('Error: ' . $e->getMessage());
}