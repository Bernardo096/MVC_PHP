<?php
namespace dao;

use bean\Fornecedores;
use generic\ConnectionFactory;

class fornecedoresDAO extends ConnectionFactory{

    protected function verificaFornecedores(String $nome, String $tipo){
        $this->conectar();
        $sql="select fornecedores,nome,tipo from fornecedores where nome=:nome and tipo=:tipo";
        $param = array(
            ":nome" =>$nome,  
            ":tipo" =>$tipo
        );
        $resultado  = $this->conn->executar($sql,$param);
        if(sizeof($resultado)>0){
            $forn = new Fornecedores();
    
            $forn->nome=$resultado[0]['nome'];
            $forn->tipo=$resultado[0]['tipo'];
            return $forn;
        }    
        return null;
    }

    protected function buscarFornecedores(String $tipo){
        $this->conectar();
        $sql="select fornecedores,nome,tipo from fornecedores where tipo=:tipo ";
        $param = array(
            ":tipo" =>$tipo,
          
        );
        $resultado  = $this->conn->executar($sql,$param);
        if(sizeof($resultado)>0){
            $forn = new Fornecedores();
           
            $forn->nome=$resultado[0]['nome'];
            $forn->tipo=$resultado[0]['tipo'];
            return $forn;
        }
        return null;
    }
}