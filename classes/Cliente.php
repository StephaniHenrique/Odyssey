<?php

class Cliente{
    private $idCliente;
    private $nomeCliente;
    private $cpfCliente;
    private $rgCliente;
    private $emailCliente;

    public function getIdCliente(){
        return $this->idCliente;
    }
    public function getNomeCliente(){
        return $this->nomeCliente;
    }
    public function getCpfCliente(){
        return $this->cpfCliente;
    }
    public function getRgCliente(){
        return $this->rgCliente;
    }
    public function getEmailCliente(){
        return $this->emailCliente;
    }
    public function setIdCliente($id){
        $this->idCliente = $id;
    }
    public function setNomeCliente($nome){
        $this->nomeCliente = $nome;
    }
    public function setCpfCliente($cpf){
        $this->cpfCliente = $cpf;
    }
    public function setRgCliente($rg){
        $this->rgCliente = $rg;
    }
    public function setEmailCliente($email){
        $this->emailCliente = $email;
    }

    public function cadastrar($cliente){
        $conexao = Conexao::pegarConexao();
        $queryInsert = "INSERT INTO tbCliente (nomecliente, cpfcliente, rgcliente, emailcliente)
                        VALUES ('".$cliente->getNomeCliente()."'
                        , '".$cliente->getCpfCliente()."'
                        , '".$cliente->getRgCliente()."'
                        ,'".$cliente->getEmailCliente()."')";
        $conexao->exec($queryInsert);
        return 'Cadastro realizado com sucesso';
        // return $queryInsert;
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select idcliente, nomecliente,
        cpfcliente, rgcliente, emailcliente from tbcliente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

    // public function editar($cliente){
    //     $conexao = Conexao::pegarConexao();
    //     $queryUpdate = "update tbCliente
    //                     set nomecliente = '".$cliente->getNomeCliente()."'
    //                     , cpfcliente = '".$cliente->getCpfCliente()."'
    //                     , rgcliente = '".$cliente->getRgCliente()."'
    //                     , emailcliente = '".$cliente->getEmailCliente()."'
    //                      where idcliente = ".$cliente->getIdCliente();
    //     $conexao->exec($queryUpdate);
    //     return 'Atualização realizada com sucesso';
    // }

    // public function excluir($cliente){
    //     $conexao = Conexao::pegarConexao();
    //     $queryUpdate = "delete from tbCliente
    //                     where idcliente = ".$cliente->getIdCliente();
    //     $conexao->exec($queryUpdate);
    //     return 'Exclusão realizada com sucesso';
    // }
}