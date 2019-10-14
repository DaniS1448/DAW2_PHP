    <?php
    // Initialize the session
    session_start();
     
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]['estado']) || $_SESSION["loggedin"]['estado'] === false){
        header("location: login.php");
            exit;
    } else {
        if (isset($_POST['user']) && !empty(($_POST['user']))) {
            $usuario=($_POST['user']);
        }
        if (isset($_POST['pass']) && !empty(($_POST['pass']))) {
            $contrasena=($_POST['pass']);
        }
        
        
    }
    
    if (isset($_POST['cerrarSesion']) && ($_POST['cerrarSesion']) == "false"){
        $_SESSION["loggedin"]['estado']=false;
        header('Location: '.$_SERVER['REQUEST_URI']);
    }
    
    function cerrarSesion() {
        $_SESSION["loggedin"]['estado']=false;
        //$_SESSION["loggedin"]=['user'=>$usuario, 'pass'=> $contrasena, 'estado'=>false];
    }
    ?>
Conectado como <b><?php echo $_SESSION["loggedin"]['user']?></b>
<form action="index.php" method="post">
<button value="false" name="cerrarSesion">Cerrar sesión</button>
</form>