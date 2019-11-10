<?php
function conectarMySQL(
    $schema ='daw2_7media',
    $usu = 'daw2_us',
    $pwd = 'EvNmcATQd5',
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