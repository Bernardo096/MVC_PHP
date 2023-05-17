<?php

use service\ProdutosService;

include_once "../generic/Autoload.php";

$tipo=$_POST['tipo'];
$nome=$_POST['nome'];

$produtosServ = new ProdutosService();
$pro=$produtosServ->verificaProdutos($tipo,$nome);
if($pro){
    header('Location: ../public/dashboard.php');
    die;
}

header('Location: ../public/mostra.php?erro=1');
