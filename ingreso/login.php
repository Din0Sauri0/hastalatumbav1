<?php
    require_once("../Controllers/usuarioController.php");
    $usuario = new usuarioController();
    $usuario->login($_POST['email'], $_POST['passwrd']);
?>