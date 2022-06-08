<?php 

    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registronotas";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn -> connect_error) {
        die("Connection Failed" . $conn->connect_error);
    }*/

    /*class Conexion{
        public $con;
        
        public function conectar(){
            $this->con = mysqli_connect("localhost", "root", "", "registronotas");
        }
    }*/

        class Conexion{

            static public function conectar(){

                #PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")

                $link = new PDO("mysql:host=localhost;dbname=registronotas", 
                                "root", 
                                "");

                $link->exec("set names utf8");

                return $link;

            }

}

?>