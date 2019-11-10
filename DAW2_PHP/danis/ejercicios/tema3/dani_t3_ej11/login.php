<?php 
session_start();

if (isset($_SESSION['activo']) && $_SESSION['activo'] == true) :?>

		<?php header('Location: tablero.php'); ?>	
		
<?php else:?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Siete y media | DAW2</title>
  <meta name="description" content="Siete y media | DAW2">
  <meta name="author" content="DaniS1448">
  <?php //echo '<link rel="stylesheet" type="text/css" href="css/login.css">'?>
  <link rel="stylesheet" type="text/css" href="css/login/style.css" />
   <style type="text/css">
    .divPrin{
        transform: scale(2) translate(0px,0px);
        transform-origin: 50 0;
        //margin-top: 100 px;
    }
    
    h1 {
        
        text-align: center; 
    	font-weight: normal;
    	letter-spacing: -1px;
    	color: #34495E;
    }
    
    .resultado {
    	margin-top: 15px;
    	min-height: 160px;
    	border-radius: 10px;
    	width: 100%;
    	text-align: center;
    	font-size: 60px;
    	text-transform: uppercase;
    	font-weight: bold;
    	line-height: 145px;
    	color: #FFFFFF;
    	text-shadow: -5px 5px 0px #ffec64, -10px 10px 0px #ffc973, -15px 15px
		0px #ffab23;
    }
    
    @media screen and ( max-height: 600px ){
        background: blue;
    }
    
    @media only screen and (max-width: 1000px) and (min-height: 1400px) {
        body {
            background-color: lightblue;
          }
          
          h1 {
            transform: scale(2) translate(155px,150px);
        }
      .divPrin{
        transform-origin: 0 0;
        transform: scale(4.5) translate(-310px,150px);
       }
}
  </style>
</head>
<body>
	<h1 class="resultado">Siete y media | DAW2</h1>
	<div class="divPrin">
		<form class="form-3" action="loginPost.php" method="post">
            <p class="clearfix">
                <label for="user">Usuario</label>
                <input type="text" name="user" id="user" placeholder="Usuario" required>
            </p>
            <p class="clearfix">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required> 
            </p>
            <p class="clearfix">
                <a href="registrar.php"><input type="button" value="Registrar usuario"></a>
            </p>  
			<p class="clearfix">
                <input type="submit" name="submit" value="Entrar al juego">
            </p> 
        </form>
	</div>
</body>
</html>
<?php endif;?>