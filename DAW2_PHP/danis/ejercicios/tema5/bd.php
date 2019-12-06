<?php
function conectarMySQL(
    $schema ='daw2_danis',
    $usu = 'daw2_danis',
    $pwd = 'HamParola',
    $host = 'daniserver.com'
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