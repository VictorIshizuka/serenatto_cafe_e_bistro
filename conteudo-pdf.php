<?php

require "src/conexao-bd.php";
require "src/Model/Produto.php";
require "src/Repository/ProdutoRepository.php";

$produtoRepository = new ProdutoRepository($pdo);
$list = $produtoRepository->buscarTodos();
?>

<style>
  /* html{
    display: flex;
    justify-content: center;

  } */
  table {
    width: 90%;
    margin: auto 0;
  }

  table,
  th,
  td {
    border: 1px solid #000;
  }

  table th {
    padding: 11px 0 11px;
    font-weight: bold;
    font-size: 18px;
    text-align: left;
    padding: 8px;
  }

  table tr {
    border: 1px solid #000;
  }

  table td {
    font-size: 18px;
    padding: 8px;
  }

  .container-admin-banner h1 {
    margin-top: 40px;
    font-size: 30px;
  }
</style>

<table>
  <thead>
    <tr>
      <th>Produto</th>
      <th>Tipo</th>
      <th>Descricão</th>
      <th>Valor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($list as $data): ?>
      <tr>
        <td><?= $data->getNome() ?></td>
        <td><?= $data->getTipo() ?></td>
        <td><?= $data->getDescricao() ?></td>
        <td><?= $data->precoFormatted() ?></td>
      </tr>
    <?php endforeach; ?>

  </tbody>
</table>