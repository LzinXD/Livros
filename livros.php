<?php
class Livros {
    private $id;
    private $nome;
    private $autor;
    private $genero;
    private $editora;
    private $ano_lancamento;
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }
    
    public function setAnoLancamento($ano_lancamento) {
        $this->ano_lancamento = $ano_lancamento;
    }

    // Salvar
    public function salvar() {
        $sql = "INSERT INTO livros (nome, autor, genero, editora, ano_lancamento)
                VALUES (:nome, :autor, :genero, :editora, :ano_lancamento)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':genero', $this->genero);
        $stmt->bindParam(':editora', $this->editora);
        $stmt->bindParam(':ano_lancamento', $this->ano_lancamento);
        return $stmt->execute();
    }

    // Atualizar
    public function atualizar() {
        $sql = "UPDATE livros 
                SET nome = :nome, 
                    autor = :autor, 
                    genero = :genero, 
                    editora = :editora, 
                    ano_lancamento = :ano_lancamento 
                WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':genero', $this->genero);
        $stmt->bindParam(':editora', $this->editora);
        $stmt->bindParam(':ano_lancamento', $this->ano_lancamento);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
