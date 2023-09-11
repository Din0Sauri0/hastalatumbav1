<?php
    require_once("../Controllers/usuarioController.php");
    $usuario = new usuarioController();
    $usuario->create_user($_POST['nombre'], $_POST['alias'], $_POST['email'], $_POST['genero'], $_POST['descripcion'], $_POST['fecha_nacimiento'], $_POST['passwrd']);
    
?>