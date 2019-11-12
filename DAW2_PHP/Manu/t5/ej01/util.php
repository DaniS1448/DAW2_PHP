<?php

function conectarMySQL(
    $schema='bdej01',
    $usu='root',
    $pwd='',
    $host='localhost'
    ){
        try {
            $dsn="mysql:host=$host;dbname=$schema";
            $db= new PDO($dsn,$usu,$pwd);
        }catch (PDOException $e){
            print("ERROR de conecion a $schema");
            die();
        }
        return $db;
}
?>
