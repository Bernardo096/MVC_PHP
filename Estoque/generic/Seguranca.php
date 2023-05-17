<?php
namespace generic;
class Seguranca{
    public static function verificaConexao(){
        session_start();
        if(!isset($_SESSION['mostra'])){
            header("Location: mostra.php");
            die;
        }
    }
}

?>