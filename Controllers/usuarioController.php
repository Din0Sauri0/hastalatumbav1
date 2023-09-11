<?php
    session_start();
    class usuarioController{
        private $model;
        public function __construct(){
            require_once('../Models/usuarioModel.php');
            $this->model = new usuarioModel();
        }
        public function create_user($nombre, $alias, $email, $genero, $descripcion, $fecha_nacimiento, $passwrd){
            $id = $this->model->insertar($nombre, $alias, $email, $genero, $descripcion, $fecha_nacimiento, $passwrd);
            if($id != false){
                $_SESSION['success'] = "El usuario se ha registrao exitosamente";
                header("Location: ../ingreso/index.php");
            }else{
                $_SESSION['error'] = "Ha ocurrido un error al momento de registrar";
            }
        }
    }
?>