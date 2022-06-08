<?php 

    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registronotas";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn -> connect_error) {
        die("Connection Failed" . $conn->connect_error);
    }*/

    class Conexion{
        public $con;
        
        public function conectar(){
            $this->con = mysqli_connect("localhost", "root", "", "registronotas");
        }
    }

?>