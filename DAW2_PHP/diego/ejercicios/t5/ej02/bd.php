<?php 
//creamos una funcion que genere la conexion con la base de datos
function conectarMYSQL($schema='supermercado', $usu='root', $pwd='', $host='localhost') {
    try {
        $dsn="mysql:host=$host;dbname=$schema";
        $db= new PDO ($dsn, $usu, $pwd);
        return $db;
    } catch (PDOException $e){
        print ('Error de conexión');
        die();     
    }   
}

?>