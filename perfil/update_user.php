<?php
require_once('../Controllers/usuarioController.php');
$update = new usuarioController();
$update->update_user($_POST['alias'],$_POST['genero'], $_POST['descripcion'], $_POST['email'], $_POST['fecha_nacimiento']);
?>