<?php
    class DB{
        //credenciales
        private $DB_HOST = 'localhost';
        private $DB_USER  = 'root';
        private $DB_PASS = '';
        private $DB_NAME = 'hastalatumba';

        public function conectar(){
            //Establecer conección
            try{
                $conn = new PDO("mysql:host=".$this->DB_HOST.";dbname=".$this->DB_NAME, $this->DB_USER, $this->DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
                return $conn;
            }catch(PDOException $err){
                return 'Error: '.$err->getMessage();
            }
        }
    }
?>