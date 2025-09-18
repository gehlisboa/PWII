<?php
  
    class Editora {
        private $id;
        private $nome;
        private $site;
        private $email;
    
    public function __construct($nome, $site, $email){
        $this->nome = $nome;
        $this->site = $site;
        $this->email = $email;
    }

    public function inserir($nome, $site, $email){
        $stmt = $pdo->prepare("INSERT INTO editora (nome, site, email) VALUES (:nome, :site, :email)");
	    $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':site', $site);
        $stmt->bindParam(':email', $email);
	    $stmt->execute();
     }

    public function buscar($id){
        $stmt = $pdo->query("SELECT * FROM editora WHERE id = $id");
        $editoras = $stmt->fetchAll();
     }

    public function buscarTodos(){
        $stmt = $pdo->query("SELECT * FROM editora");
        $editoras = $stmt->fetchAll();
     }

    public function atualizar($id){ 
        $stmt = $pdo->prepare("UPDATE editora SET nome, site, email data = :nome, :site, :email WHERE id = :id");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':site, $site');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }

    public function deletar($id){
        $stmt = $pdo->prepare('DELETE FROM editora WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
     }
    
     
        public function login(){ }

        public function input(){ }
 }
?>