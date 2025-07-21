<?php
require 'conexao.php';
require 'livros.php';

$livros= new Livros($pdo);
$livros->setNome($_POST['nome']);
$livros->setAutor($_POST['autor']);
$livros->setGenero($_POST['genero']);
$livros->setEditora($_POST['editora']);
$livros->setAnoLancamento($_POST['ano_lancamento']);

if ($livros->salvar()) {
    echo "livro cadastrado com sucesso! <a href='listar_livro.php'>Ver lista</a>";
} else {
    echo "Erro ao cadastrar.";
}
?>