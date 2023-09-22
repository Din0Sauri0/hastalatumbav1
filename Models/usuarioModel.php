<?php
    session_start();
    class usuarioModel{
        private $PDO;
        public function __construct(){
            require_once("../data/conn.php");
            $conn = new DB();
            $this->PDO = $conn->conectar();   
        }
        public function create_user($nombre, $alias, $email, $genero, $descripcion, $fecha_nacimiento, $passwrd){
            try{
                $current_date = date('Y-m-d');
                $state = 1;
                
                $query = $this->PDO->prepare("INSERT INTO usuarios VALUES(null, :nombre, :alias, :fecha_registro, :estado, :genero, :descripcion, :email, :fecha_nacimiento, :passwrd)");
                $query->bindParam(":nombre", $nombre);
                $query->bindParam(":alias", $alias);
                $query->bindParam(":fecha_registro", $current_date);
                $query->bindParam(":estado", $state);
                $query->bindParam(":genero", $genero);
                $query->bindParam(":descripcion", $descripcion);
                $query->bindParam(":email", $email);
                $query->bindParam(":fecha_nacimiento", $fecha_nacimiento);
                $query->bindParam(':passwrd', password_hash($passwrd, PASSWORD_DEFAULT));
                return ($query->execute()) ? true : false;
            }catch(PDOException $err){
                return 'Error: '.$err->getMessage();  
            }
            
        }
        public function login($email, $passwrd){
            try{
                $query = $this->PDO->prepare('SELECT * FROM usuarios WHERE email=:email');
                $query->bindParam(':email', $email);
                $query->execute();
                $res = $query->fetch(PDO::FETCH_ASSOC);
                if($res){
                    if(password_verify($passwrd, $res['passwrd'])){
                        $_SESSION['user_information'] = $res;
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }catch(PDOException $err){
                return $err->getMessage();
            }
        }
        public function update_user($alias, $genero, $descripcion, $email, $fecha_nacimiento){
            $query = $this->PDO->prepare("UPDATE usuarios SET alias=:alias, genero=:genero, descripcion=:descripcion, email=:email, fecha_nacimiento=:fecha_nacimiento WHERE id_usuario=:id_usuario");
            $query->bindParam(':alias', $alias);
            $query->bindParam(':genero', $genero);
            $query->bindParam(':descripcion', $descripcion);
            $query->bindParam(':email', $email);
            $query->bindParam(':fecha_nacimiento', $fecha_nacimiento);
            $query->bindParam(':id_usuario', $_SESSION['user_information']['id_usuario']);
            $query->execute();
            if($query){
                return true;
            }else{
                return false;
            }

        }
        public function get_data_user($id){
            $query = $this->PDO->prepare("SELECT * FROM usuarios WHERE id_usuario=:id_usuario");
            $query->bindParam(':id_usuario', $id);
            $query->execute();
            $res = $query->fetch(PDO::FETCH_ASSOC);
            return $res;
        }

    }
?>