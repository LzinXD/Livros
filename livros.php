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

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setgenero($genero) {
        $this->$genero = $genero;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }
    
    public function setAnoLancamento($ano_lancamento) {
        $this->ano_lancamento = $ano_lancamento;
    }

    public function salvar() {
        $sql = "INSERT INTO livros (nome, autor, genero, editora, ano_lancamento) VALUES (:nome, :autor, :editora, :ano_lancamento)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':genero', $this->genero);
        $stmt->bindParam(':editora', $this->editora);
        $stmt->bindParam(':ano_lancamento', $this->ano_lancamento);
        return $stmt->execute();
    }

    public function atualizar() {
        $sql = "UPDATE livros SET nome = :nome, autor = :autor, genero$genero$genero = :genero$genero$genero WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':genero$genero$genero', $this->genero$genero$genero);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
}
?>