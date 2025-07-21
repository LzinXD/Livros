<?php
require 'conexao.php';

$sql = "SELECT * FROM livros";
$stmt = $pdo->query($sql);
$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>livors Cadastrados</h2>
    <a href="form_livro.php" class="btn btn-success mb-3">Novo Cliente</a>
    <table class="table table-bordered">
         <tr>
            <th>Nome</th>
            <th>Autor</th>
            <th>Gênero</th>
            <th>Editora</th>
            <th>Ano de Lançamento</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($livros as $c): ?>
        <tr>
            <td><?= htmlspecialchars($c['nome']); ?></td>
            <td><?= htmlspecialchars($c['autor']); ?></td>
            <td><?= htmlspecialchars($c['genero']); ?></td>
            <td><?= htmlspecialchars($c['editora']); ?></td>
            <td><?= htmlspecialchars($c['ano_lancamento']); ?></td>
            <td>
                <a href="editar_livro.php?id=<?= $c['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                <a href="excluir_livro.php?id=<?= $c['id']; ?>" 
                   class="btn btn-danger btn-sm" 
                   onclick="return confirm('Tem certeza que deseja excluir?');">
                   Excluir
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
