<?php
  
    class Avaliaçao {
        private $id;
        private $nome;
        private $comentario;
        private $data;
    
    public function __construct($nome, $comentario, $data){
        $this->nome = $nome;
        $this->comentario = $comentario;
        $this->data = $data;
    }

    public function inserir($nome, $comentario, $data){ 
        $stmt = $pdo->prepare("INSERT INTO avaliaçao (nome, comentario, data) VALUES (:nome, :comentario, :data)");
	    $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':comentario', $comentario);
        $stmt->bindParam(':data', $data);
	    $stmt->execute();
    }

    public function buscar($id){ 
        $stmt = $pdo->query("SELECT * FROM avaliaçao WHERE id = $id");
        $avaliaçao = $stmt->fetchAll();
    }

    public function buscarTodos(){ 
        $stmt = $pdo->query("SELECT * FROM avaliaçao");
        $avaliaçao = $stmt->fetchAll();
    }

    public function atualizar($id, $nome, $comentario, $data){ 
        $stmt = $pdo->prepare("UPDATE avaliaçao SET nome, comentario, data = :nome, :comentario, :data WHERE id = :id");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':comentario, $comentario');
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function deletar($id){ 
        $stmt = $pdo->prepare('DELETE FROM avaliaçao WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

         public function login(){ }

        public function input(){ }
    
 }
?>