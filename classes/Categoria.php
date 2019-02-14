<?php

require_once('classes/Conexao.php');

class Categoria
{

    private $id;
    private $nome;

    public function __construct($id = false){
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        return $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        return $this->nome = $nome;
    }

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::pegaConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function insere(){
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";
        $conexao = Conexao::pegaConexao();
        $conexao->exec($query);
    }

    public function carregar(){
       $query = "SELECT id, nome FROM categorias where id = ". $this->id;
        $conexao = Conexao::pegaConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            $this->nome = $linha['nome'];
        }
    }

    public function atualizar(){
        $query = "UPDATE categorias set nome = '". $this->nome ."' WHERE id = ". $this->id;
        $conexao = Conexao::pegaConexao();
        $conexao->exec($query);
    }
}