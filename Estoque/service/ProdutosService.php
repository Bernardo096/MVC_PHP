<?php 
namespace service;

use dao\ProdutosDAO;

class ProdutosService extends ProdutosDAO{

    public function verificaProdutos(String $tipo, String $nome){

        if(filter_var($tipo)){
            $produtos=parent::verificaProdutos($tipo,$nome);
            if($produtos!=null){
                session_start();
                $_SESSION['produtos']=$produtos;
                return true;
            }
        }
        return false;  
    }

    public  function buscarProdutos(String $tipo){
        return parent::buscarProdutos($tipo);
    }
}
?>