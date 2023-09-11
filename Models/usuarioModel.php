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
                //insert into usuarios values("gustavo", "din0", "2023-09-25", 1, 1, "Hola soy din0", "gustavo@gmail.com", "1998-09-24", "123123");
                $query = $this->PDO->prepare("INSERT INTO usuarios VALUES(null, :nombre, :alias, :fecha_registro, :estado, :genero, :descripcion, :email, :fecha_nacimiento, :passwrd)");
                $query->bindParam(":nombre", $nombre);
                $query->bindParam(":alias", $alias);
                $query->bindParam(":fecha_registro", date("Y-m-d"));
                $query->bindParam(":estado", 1);
                $query->bindParam(":genero", $genero);
                $query->bindParam(":descripcion", $descripcion);
                $query->bindParam(":email", $email);
                $query->bindParam(":fecha_nacimiento", $fecha_nacimiento);
                $query->bindParam(':passwrd', $passwrd);
                return ($query->execute()) ? $this->PDO->lastInsertId() : false;
            }catch(PDOException $err){
                return 'Error: '.$err->getMessage();


                
            }
            
        }

    }
?>