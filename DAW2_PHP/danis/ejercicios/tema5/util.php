<?php
require_once 'bd.php';
function insertarArrayProductos($arrayProductos){
    
    $db = conectarMySQL();
    $consulta = "insert into producto(nombre, precio) values (:nombre, :precio)";
    $sentencia = $db->prepare($consulta);
    foreach ($arrayProductos as $producto){
        $sentencia->bindParam ( ':nombre', $producto[0]);
        $sentencia->bindParam ( ':precio', $producto[1]);
        $sentencia -> execute();
    }
}

function insertarProducto($nombre, $precio){
    
    $db = conectarMySQL();
    $consulta = "insert into producto(nombre, precio) values (:nombre, :precio)";
    $sentencia = $db->prepare($consulta);
    $sentencia->bindParam ( ':nombre', $nombre);
    $sentencia->bindParam ( ':precio', $precio);
    $sentencia -> execute();
}

function recogerProductos(){
    $db = conectarMySQL();
    $consulta = "select nombre, precio from producto";
    $sentencia = $db->prepare($consulta);
    $sentencia -> execute();
    $resultado = $sentencia->fetchAll();
    
    return $resultado;
}

function pintarProductos($temporal){
    
    $html= "<table><tr><th>Nombre</th><th>Precio</th></tr>";
    foreach (recogerProductos() as $producto){
        $html .= <<<HTML
        <tr>
            <td>{$producto['nombre']}</td>
            <td>{$producto['precio']}</td>
        </tr>
HTML;
    }
        
    foreach ($temporal as $producto){
        $html .= <<<HTML
        <tr>
            <td>{$producto['nombre']}</td>
            <td>{$producto['precio']}</td>
        </tr>
HTML;
    }
    
    
    //$html.="</table>";
    
    return $html;
}

function recoger($user, $elemento){
    $db = conectarMySQL();
    $consulta = "select $elemento from users where user = :user";
    $sentencia = $db->prepare($consulta);
    $sentencia->bindParam ( ':user', $user);
    $sentencia -> execute();
    $resultado = $sentencia->fetchAll();
    
    $datoRecogido = 0;
    
    foreach ($resultado as $res){
        if (isset($res[$elemento]) && $res[$elemento] != [] ) {
            $datoRecogido = $res[$elemento];
        }
    }
    return $datoRecogido;
}

function insertarProductoSesion($nombre, $precio){
    
}
?>