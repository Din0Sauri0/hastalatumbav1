<?php
    session_start();
    require_once('../Controllers/confecionController.php');
    $confecion = new confecionController();
    $confecion->create_confecion($_POST['titulo'], $_POST['categoria'], $_POST['confecion'], $_SESSION['user_information']['id_usuario']);
?>