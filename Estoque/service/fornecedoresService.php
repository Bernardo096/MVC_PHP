<?php 
namespace service;

use dao\fornecedoresDAO;

class fornecedoresService extends fornecedoresDAO{

    public function verificaFornecedores(String $tipo, String $nome){

        if(filter_var($tipo)){
            $fornecedores=parent::verificaFornecedores($tipo,$nome);
            if($fornecedores!=null){
                session_start();
                $_SESSION['fornecedores']=$fornecedores;
                return true;
            }
        }
        return false;  
    }

    public  function buscarFornecedores(String $tipo){
        return parent::buscarFornecedores($tipo);
    }
}
?>