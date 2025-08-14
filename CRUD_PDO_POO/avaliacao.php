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

    public function inserir(){ }

    public function buscar($id){ }

    public function buscarTodos(){ }

    public function atualizar($id){ }

    public function deletar($id){ }
    
 }
?>