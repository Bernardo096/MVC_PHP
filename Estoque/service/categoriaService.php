<?php 
namespace service;

use dao\categoriasDAO;

class categoriaService extends categoriasDAO{

    public function verificaCategoria(String $tipo, String $nome){

        if(filter_var($tipo)){
            $categoria=parent::verificaCategoria($tipo,$nome);
            if($categoria!=null){
                session_start();
                $_SESSION['categoria']=$categoria;
                return true;
            }
        }
        return false;  
    }

    public  function buscarCategoria(String $tipo){
        return parent::buscarCategoria($tipo);
    }
}
?>