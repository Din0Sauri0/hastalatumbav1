<?php
    class confecionModel{
        private $PDO;
        public function __construct()
        {
            require_once("../data/conn.php");
            $conn = new DB();
            $this->PDO = $conn->conectar();
        }
        public function create_confecion($titulo, $categoria, $confecion, $id_usuario_id){
            try{
                $current_date = date('Y-m-d');
                $state = 1;

                $query = $this->PDO->prepare("INSERT INTO confeciones VALUES(null, :titulo, :fecha_publicacion, :estado, :confecion, :id_usuario_id, :id_categoria_id)");
                $query->bindParam(":titulo", $titulo);
                $query->bindParam(":fecha_publicacion", $current_date);
                $query->bindParam(":estado", $state);
                $query->bindParam(":confecion", $confecion);
                $query->bindParam(":id_usuario_id", $id_usuario_id);
                $query->bindParam(":id_categoria_id", $categoria);
                return ($query->execute()) ? true : false;
            }catch(PDOException $err){
                return $err->getMessage(); 
            }
        }
        public function confeciones_usuario($id){
            try{
                $query = $this->PDO->prepare("SELECT * FROM confeciones WHERE id_usuario_id=:id");
                $query->bindParam(":id", $id);
                $query->execute();
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                if($res){
                    return $res;
                }else{
                    return false;
                }
                
            }catch(PDOException $err){
                return $err->getMessage();
            }
        }
    }

?>