<?php
    session_start();
    class usuarioController{
        private $model;
        private $helper;
        public function __construct(){
            require_once('../Models/usuarioModel.php');
            require_once('../Helpers/helpers.php');
            $this->model = new usuarioModel();
            $this->helper = new Helpers();
        }
        public function create_user($nombre, $alias, $email, $genero, $descripcion, $fecha_nacimiento, $passwrd, $repasswrd){
            $validation = $this->helper->validateRegisterForm($email, $passwrd, $repasswrd, $genero, $fecha_nacimiento);
            if($validation === true){
                $id = $this->model->create_user($nombre, $alias, $email, $genero, $descripcion, $fecha_nacimiento, $passwrd);
                if($id == true){
                    $_SESSION['success'] = "El usuario se ha registrado exitosamente";
                    header("Location: ../ingreso/index.php");
                }else{
                    $_SESSION['error'] = "Ha ocurrido un error al momento de registrar";
                }
            }else{
                $_SESSION['formError'] = $validation;
                $_SESSION['oldValues'] = [
                    "nombre" => $nombre,
                    "alias" => $alias,
                    "email" => $email,
                    "genero" => $genero,
                    "descripcion" => $descripcion,
                    "fecha_nacimiento" => $fecha_nacimiento,
                    "passwrd" => $passwrd
                ];
                header("Location: ../registro-en-club/index.php");
            }
            
        }
    }
?>