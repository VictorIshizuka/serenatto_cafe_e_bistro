<?php

class ProdutoRepository
{
  private PDO $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function buscarTodos(): array
  {
    $sql = "SELECT * FROM produtos ORDER BY preco";
    $stmt = $this->pdo->query($sql);
    $dados =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    $todosOsDados = array_map(function ($dado) {
      return $this->formarObjeto($dado);
    }, $dados);
    return $todosOsDados;
  }

  public function cadastrar(Produto $produto): void
  {
    $sql = "INSERT INTO produtos (tipo, nome, descricao, preco, imagem) values (?,?,?,?,?);";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(1, $produto->getTipo());
    $stmt->bindValue(2, $produto->getNome());
    $stmt->bindValue(3, $produto->getDescricao());
    $stmt->bindValue(4, $produto->getPreco());
    $stmt->bindValue(5, $produto->getImagem());
    $stmt->execute();
  }

  public function atualizar(Produto $produto): void
  {

    $sql = "UPDATE produtos SET tipo = ?, nome = ?, descricao = ?, preco = ?, imagem = ? WHERE id = ?";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $produto->getTipo());
    $statement->bindValue(2, $produto->getNome());
    $statement->bindValue(3, $produto->getDescricao());
    $statement->bindValue(4, $produto->getPreco());
    $statement->bindValue(5, $produto->getImagem());
    $statement->bindValue(6, $produto->getId());
    $statement->execute();
  }

  public function buscarApenasUm(int $id): object
  {
    $sql = "SELECT * FROM produtos WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(1,$id);
    $stmt->execute();
    $dados=  $stmt->fetch(PDO::FETCH_ASSOC);
    return $this->formarObjeto($dados);
     
  }

  public function deletar(int $id): void
  {
   
    $sql = "DELETE FROM produtos WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(1, $id, \PDO::PARAM_INT);
    $stmt->execute();
  }
  private function formarObjeto($dados)
  {
    return new Produto(
      $dados['id'],
      $dados['tipo'],
      $dados['nome'],
      $dados['descricao'],
      $dados['imagem'],
      $dados['preco']
    );
  }
  public function opcoesCafe(): array
  {
    $sql1 = "SELECT * FROM produtos WHERE tipo = 'Café'";
    $statement = $this->pdo->query($sql1);
    $produtosCafe = $statement->fetchAll(PDO::FETCH_ASSOC);

    $dadosCafe = array_map(function ($cafe) {
      return $this->formarObjeto($cafe);
    }, $produtosCafe);

    return $dadosCafe;
  }

  public function opcoesAlmoco(): array
  {
    $sql2 = "SELECT * FROM produtos WHERE tipo = 'Almoço'";
    $statement = $this->pdo->query($sql2);
    $produtosAlmoco = $statement->fetchAll(PDO::FETCH_ASSOC);

    $dadosAlmoco = array_map(function ($almoco) {
      return $this->formarObjeto($almoco);
    }, $produtosAlmoco);
    return $dadosAlmoco;
  }
}
