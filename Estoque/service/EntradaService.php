<?php 
namespace service;

use dao\entradaDAO;

class EntradaService extends entradaDAO{

    public function verificaEntrada(String $tipo, String $nome){

        if(filter_var($tipo)){
            $entrada=parent::verificaEntrada($tipo,$nome);
            if($entrada!=null){
                session_start();
                $_SESSION['entrada']=$entrada;
                return true;
            }
        }
        return false;  
    }

    public  function buscarEntrada(String $tipo){
        return parent::buscarEntrada($tipo);
    }
}
?>