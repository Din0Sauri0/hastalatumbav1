<?php
class Helpers
{
    private $PDO;
    public function __construct()
    {
        require_once("../data/conn.php");
        $conn = new DB();
        $this->PDO = $conn->conectar();
    }
    public function validateRegisterForm($email, $password, $repassword, $genero, $fecha_nacimiento)
    {
        $fecha_actual = date("Y-m-d");
        $fecha_nacimiento = new DateTime($fecha_nacimiento);
        $fecha_actual = new DateTime($fecha_actual);
        $edad = $fecha_nacimiento->diff($fecha_actual)->y;
        $messageError = array();
        $query = $this->PDO->prepare("SELECT email FROM usuarios WHERE email=:email");
        $query->bindParam(":email", $email);
        $query->execute();
        $res = $query->fetch(PDO::FETCH_ASSOC);
        if($res){
            $messageError['email'] = "El email ya esta en uso.";
        }
        if($password !== $repassword){
            $messageError['password_verificate'] = 'Las contraseñas con coinciden.';
        }
        if(strlen($password) > 12 || strlen($password) < 8){
            $messageError['password_len'] = 'La contraseña debe tener entre 8 y 12 caracteres.';
        }
        if($genero == 0){
            $messageError['genero'] = 'selecciones un genero.';
        }
        if($edad < 18){
            $messageError['edad'] = 'Lamentablementes debe tener 18 años.';
        }
        if(count($messageError) >= 1){
            return $messageError;
        }else{
            return true;
        }
    }
}
