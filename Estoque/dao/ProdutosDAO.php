<?php
namespace dao;

use bean\Produtos;
use generic\ConnectionFactory;

class produtosDAO extends ConnectionFactory{

    protected function verificaProdutos(String $nome, String $tipo){
        $this->conectar();
        $sql="select produtos,nome,tipo from produtos where nome=:nome and tipo=:tipo";
        $param = array(
            ":nome" =>$nome,  
            ":tipo" =>$tipo
        );
        $resultado  = $this->conn->executar($sql,$param);
        if(sizeof($resultado)>0){
            $prod = new Produtos();
    
            $prod->nome=$resultado[0]['nome'];
            $prod->tipo=$resultado[0]['tipo'];
            return $prod;
        }    
        return null;
    }

    protected function buscarProdutos(String $tipo){
        $this->conectar();
        $sql="select produtos,nome,tipo from produtos where tipo=:tipo ";
        $param = array(
            ":tipo" =>$tipo,
          
        );
        $resultado  = $this->conn->executar($sql,$param);
        if(sizeof($resultado)>0){
            $prod = new Produtos();
           
            $prod->nome=$resultado[0]['nome'];
            $prod->tipo=$resultado[0]['tipo'];
            return $prod;
        }
        return null;
    }
}