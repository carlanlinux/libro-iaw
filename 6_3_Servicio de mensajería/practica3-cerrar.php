<?php
//eliminación de la sesión
session_start();
unset($_SESSION);
session_destroy();
//volvemos al formulario de alta
header("Location:practica3-index.php");
?>