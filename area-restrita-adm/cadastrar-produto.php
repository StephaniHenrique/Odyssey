<?php 

require_once 'global.php';

try{
    header("Location: produtosCadastro.php");
    
    $produto = new Produto();
    $produto->setDescProduto($_POST['txtdesc']);
    $produto->setValorProduto($_POST['txtvalor']);
    $produto->setQtdeProduto($_POST['txtqtde']);
    
    $produto->setFotoProduto($_FILES['foto']['tmp_name']);

    $produto->setNomeFotoProduto($_FILES['foto']['name']);

    $produto->cadastrar($produto);

    $produto = $produto->consultarId($produto);

    $extensao = substr(strstr($produto->getNomeFotoProduto(), "."),1);
    $produto->setNomeFotoProduto("images/produto/" . $produto->getIdProduto() .".".$extensao);
    
    $produto->cadastrarFoto($produto);

    move_uploaded_file($produto->getFotoProduto(), "../".$produto->getNomeFotoProduto());
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>