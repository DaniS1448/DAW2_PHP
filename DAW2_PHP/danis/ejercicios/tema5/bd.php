<?php
function conectarMySQL(
    $schema ='root',
    $usu = 'test',
    $pwd = '',
    $host = 'localhost'
    ) {
        try {
            $dsn = "mysql:host=$host;dbname=$schema";
            $db = new PDO($dsn, $usu, $pwd);
        } catch (PDOException $e){
            print ("ERROR de conexión a $schema");
            die();
        }
        return $db;
}
?>