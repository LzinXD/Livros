<?php
require 'conexao.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("ID não informado.");
}

$sql = "DELETE FROM livros WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    echo "Livro excluído com sucesso! <a href='listar_livro.php'>Voltar para a lista</a>";
} else {
    echo "Erro ao excluir o livro.";
}
?>
