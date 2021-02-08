<?php

class Produto{
    private $idProduto;
    private $descProduto;
    private $valorProduto;
    private $qtdeProduto;
    private $fotoProduto;
    private $nomeFotoProduto;

    public function getIdProduto(){
        return $this->idProduto;
    }
    public function getDescProduto(){
        return $this->descProduto;
    }
    public function getValorProduto(){
        return $this->valorProduto;
    }
    public function getQtdeProduto(){
        return $this->qtdeProduto;
    }
    public function getFotoProduto(){
        return $this->fotoProduto;
    }
    public function getNomeFotoProduto(){
        return $this->nomeFotoProduto;
    }
    public function setIdProduto($id){
        $this->idProduto = $id;
    }
    public function setDescProduto($desc){
        $this->descProduto = $desc;
    }
    public function setValorProduto($valor){
        $this->valorProduto = $valor;
    }
    public function setQtdeProduto($qtde){
        $this->qtdeProduto = $qtde;
    }
    public function setFotoProduto($foto){
        $this->fotoProduto = $foto;
    }
    public function setNomeFotoProduto($nomeFoto){
        $this->nomeFotoProduto = $nomeFoto;
    }

    public function cadastrar($produto){
        $conexao = Conexao::pegarConexao();
        //statement
        $stmt = $conexao->prepare("insert into tbproduto
                        (descproduto, valorproduto, qtdeproduto)
                        values (?, ?, ?)");
        $stmt->bindParam(1, $produto->descProduto);
        $stmt->bindParam(2, $produto->valorProduto);
        $stmt->bindParam(3, $produto->qtdeProduto);
        $stmt->execute();

        return 'Produto cadastrado com sucesso';   
    }

    public function consultarId($produto){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT MAX(idproduto) as id FROM tbproduto";
        $resultado = $conexao->query($querySelect);
        while($row = $resultado->fetch(PDO::FETCH_OBJ))
            $produto->idProduto =$row->id;

        return $produto;   
    }

    public function cadastrarFoto($produto){
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare("UPDATE tbproduto SET fotoproduto = ?
                                    WHERE idproduto = ?");
        $stmt->bindParam(1, $produto->nomeFotoProduto);
        $stmt->bindParam(2, $produto->idProduto);
        $stmt->execute();

        return 'Foto cadastrada com sucesso';
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select idproduto, descproduto, valorproduto,
        qtdeproduto, fotoproduto from tbproduto";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

}