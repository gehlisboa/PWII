<?php
    class Pessoa {
        public $nome;
        public $idade;
        public function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }
            
        public function exibir(){
            echo "Meu nome é $this->nome e tenho $this->idade anos";
        }
    }

    $pessoa = new Pessoa ('Justin', 30);
    $pessoa->exibir();
    
?>