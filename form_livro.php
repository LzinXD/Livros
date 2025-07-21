    <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastro de Livros</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container mt-4">
        <h2>Cadastro de Livros</h2>
        <form action="salvar_livro.php" method="POST">
            <div class="mb-3">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Autor:</label>
                <input type="text" name="autor" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Genero:</label>
                <input type="text" name="genero" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Editora:</label>
                <input type="text" name="editora" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Ano de Lançamento:</label>
                <input type="number" name="ano_lancamento" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <a href="listar_livro.php" class="btn btn-secondary mt-3">Ver livros cadastrados</a>
    </body>
    </html>