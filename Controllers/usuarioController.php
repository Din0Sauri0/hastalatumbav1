<?php
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
            $validation = $this->helper->validateRegisterForm($email, $passwrd, $repasswrd, $genero, $alias, $nombre, $fecha_nacimiento);
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
                ];
                header("Location: ../registro-en-club/index.php");
            }
        }
        public function login($email, $passwrd){
            $validation = $this->helper->validateLogin($email, $passwrd);
            if($validation){
                $res = $this->model->login($email, $passwrd);
                if($res){
                    header('Location: ../perfil/index.php');
                }else{
                    return $res;
                    header('Location: ../ingreso/index.php');
                }
            }else{
                $_SESSION['formError'] = $validation;
                header('Location: ../ingreso/index.php');
            }
        }
        public function update_user($alias, $genero, $descripcion, $email, $fecha_nacimiento){
            $res = $this->model->update_user($alias, $genero, $descripcion, $email, $fecha_nacimiento);
            if($res){
                $_SESSION['user_information'] = $this->model->get_data_user($_SESSION['user_information']['id_usuario']);
                header("Location: ../perfil/index.php");
            }else{
                header("Location: ../registro-en-club/index.php");
            }
        }
        
    }
?>