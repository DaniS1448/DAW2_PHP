<?php
session_start();
if(isset($_SESSION['pendientes'])){
    unset($_SESSION['pendientes']);
}
header('Location:add.php');