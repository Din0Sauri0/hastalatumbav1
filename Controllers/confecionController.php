<?php
class confecionController{
    private $model;
    public function __construct(){
        require_once('../Models/confecionModel.php');
        $this->model = new confecionModel();
    }
    public function create_confecion($titulo, $categoria, $confecion, $id_usuario_id){
        try{
            $id = $this->model->create_confecion($titulo, $categoria, $confecion, $id_usuario_id);
            if($id){
                header("Location: ../perfil/index.php");
            }else{
                header("Location: ../perfil/index.php");
            }
        }catch(PDOException $err){
            return $err->getMessage();
        }
    }
    public function confeciones ($id){
        $res = $this->model->confeciones_usuario($id);
        return $res;
    }
}

?>