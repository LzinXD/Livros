<?php
require 'conexao.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID não informado.");
}

$sql = "DELETE FROM livros WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo "livro excluído com sucesso! <a href='listar_livros.php'>Voltar para a lista</a>";
} else {
    echo "Erro ao excluir livro.";
}
?>
