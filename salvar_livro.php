<?php
require 'conexao.php';
require 'livros.php';

$livro = new Livros($pdo);
$livro->setNome($_POST['nome']);
$livro->setAutor($_POST['autor']);
$livro->setGenero($_POST['genero']);
$livro->setEditora($_POST['editora']);
$livro->setAnoLancamento($_POST['ano_lancamento']);

if ($livro->salvar()) {
    echo "Livro cadastrado com sucesso! <a href='listar_livro.php'>Ver lista</a>";
} else {
    echo "Erro ao cadastrar.";
}
?>
