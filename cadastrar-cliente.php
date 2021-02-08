<?php 

require_once 'global.php';

try{
    header("Location: index.php");
    
    $cliente = new Cliente();
    $cliente->setNomeCliente($_POST['txtnome']);
    $cliente->setCpfCliente($_POST['txtcpf']);
    $cliente->setRgCliente($_POST['txtrg']);
    $cliente->setEmailCliente($_POST['txtemail']);
    
    $cliente->cadastrar($cliente);
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>