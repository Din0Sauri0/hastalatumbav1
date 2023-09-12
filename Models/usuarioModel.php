<?php
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
                $query->bindParam(':passwrd', $passwrd);
                return ($query->execute()) ? true : false;
            }catch(PDOException $err){
                return 'Error: '.$err->getMessage();  
            }
            
        }

    }
?>