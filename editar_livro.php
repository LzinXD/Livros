<?php
require 'conexao.php';
require 'livros.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("ID não informado.");
}

$sql = "SELECT * FROM livros WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$livros = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$livros) {
    die("Livro não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Livro</title>
    <link href="Style.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Editar Livro</h2>
    <form action="atualizar_livro.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($livros['id']); ?>">
        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($livros['nome']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Autor:</label>
            <input type="text" name="autor" class="form-control" value="<?= htmlspecialchars($livros['autor']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Gênero:</label>
            <input type="text" name="genero" class="form-control" value="<?= htmlspecialchars($livros['genero']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Editora:</label>
            <input type="text" name="editora" class="form-control" value="<?= htmlspecialchars($livros['editora']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Ano de Lançamento:</label>
            <input type="number" name="ano_lancamento" class="form-control" value="<?= htmlspecialchars($livros['ano_lancamento']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="listar_livros.php" class="btn btn-secondary mt-3">Voltar para a Lista</a>
    </form>
</body>
</html>
