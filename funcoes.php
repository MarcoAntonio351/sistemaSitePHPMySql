<?php
   require_once "config.php";

   function conectarBancoDados($servidor, $usuario, $senha, $porta, $bancoDeDados){
       try {
           $conn = new PDO("mysql:host={$servidor};dbname={$bancoDeDados}", $usuario, $senha);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $conn;
       } catch (PDOException $e) {
        die("Erro ao conectar\n".$e->getMessage());
       }
    }

    function Debugar($dados){ 
        echo "<per>";
        var_dump($dados);
        echo "</pre";
        die();
    }

