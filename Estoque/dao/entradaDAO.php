<?php
namespace dao;

use bean\Entradas;
use generic\ConnectionFactory;

class entradaDAO extends ConnectionFactory{

    protected function verificaEntrada(String $nome, String $tipo){
        $this->conectar();
        $sql="select entrada,nome,tipo from entrada where nome=:nome and tipo=:tipo";
        $param = array(
            ":nome" =>$nome,  
            ":tipo" =>$tipo
        );
        $resultado  = $this->conn->executar($sql,$param);
        if(sizeof($resultado)>0){
            $ent = new Entradas();
    
            $ent->nome=$resultado[0]['nome'];
            $ent->tipo=$resultado[0]['tipo'];
            return $ent;
        }    
        return null;
    }

    protected function buscarEntrada(String $tipo){
        $this->conectar();
        $sql="select entrada,nome,tipo from entrada where tipo=:tipo ";
        $param = array(
            ":tipo" =>$tipo,
          
        );
        $resultado  = $this->conn->executar($sql,$param);
        if(sizeof($resultado)>0){
            $ent = new Entradas();
           
            $ent->nome=$resultado[0]['nome'];
            $ent->tipo=$resultado[0]['tipo'];
            return $ent;
        }
        return null;
    }
}