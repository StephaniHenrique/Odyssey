<?php


    
require_once 'global.php';

try{
    $cliente = new Cliente();
    if(!empty($_POST['campoPesquisa'])){
        $campoPesquisa = $_POST['campoPesquisa']."%";
        $lista = $cliente->listarPesquisa($campoPesquisa);
        foreach ($lista as $linha){
        echo "<tr>
                <td> ". $linha['idcliente'] ."</td>
                <td> ". $linha['nomecliente'] ."</td>
                <td> ". $linha['emailcliente'] ."</td>
                <td> <a href='form-editar-cliente.php?id= ". $linha['idcliente'] ."'>Editar</a></td>
                <td> <a href='excluir-cliente.php?id= ". $linha['idcliente'] ."'>Excluir</a></td>
            </tr>";
        }
    }
    else{
        $lista = $cliente->listar();
        foreach ($lista as $linha){
        echo "<tr>
                <td> ". $linha['idcliente'] ."</td>
                <td> ". $linha['nomecliente'] ."</td>
                <td> ". $linha['emailcliente'] ."</td>
                <td> <a href='#?id= ". $linha['idcliente'] ."'>Editar</a></td>
                <td> <a href='#id= ". $linha['idcliente'] ."'>Excluir</a></td>
            </tr>";
        }

    }
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>