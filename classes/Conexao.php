<?php

class Conexao 
{
    public static function pegaConexao(){
        return new PDO('mysql:host=127.0.0.1;dbname=estoque', 'root', '');
    }
}
