<?php
namespace dao;

use bean\Categorias;
use generic\ConnectionFactory;

class categoriasDAO extends ConnectionFactory{

    protected function verificaCategoria(String $nome, String $tipo){
        $this->conectar();
        $sql="select categorias,nome,tipo from categorias where nome=:nome and tipo=:tipo";
        $param = array(
            ":nome" =>$nome,  
            ":tipo" =>$tipo
        );
        $resultado  = $this->conn->executar($sql,$param);
        if(sizeof($resultado)>0){
            $cat = new Categorias();
    
            $cat->nome=$resultado[0]['nome'];
            $cat->tipo=$resultado[0]['tipo'];
            return $cat;
        }    
        return null;
    }

    protected function buscarCategoria(String $tipo){
        $this->conectar();
        $sql="select categorias,nome,tipo from categorias where tipo=:tipo ";
        $param = array(
            ":tipo" =>$tipo,
          
        );
        $resultado  = $this->conn->executar($sql,$param);
        if(sizeof($resultado)>0){
            $cat = new Categorias();
           
            $cat->nome=$resultado[0]['nome'];
            $cat->tipo=$resultado[0]['tipo'];
            return $cat;
        }
        return null;
    }
}
