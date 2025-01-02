<?php 
require "src/conexao-bd.php";
require "src/Model/Produto.php";
require "src/Repository/ProdutoRepository.php";

$repository = new ProdutoRepository($pdo);
 $repository->deletar($_POST['id']);
header('Location: admin.php');
