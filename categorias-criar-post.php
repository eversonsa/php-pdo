<?php 

require_once('classes/conexao.php');
require_once('classes/categoria.php');

$categoria = new Categoria();

$nome = $_POST['nome'];

$categoria->setNome($nome);
$categoria->insere();

header('Location: categorias.php');
die();