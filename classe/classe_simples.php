<?php
    class Pessoa {
        //OPções de encapsulamento
        //publiic - A variável é acessível de fora da classe
        //private - É acessível somente dentro da classe 
        //protected - É  acessível somente por herança
        public $nome;
        public $idade;

        public function apresentar() {
            echo "Olá, meu nome é $this->nome, <br>";
            echo "tenho $this->idade anos";
            echo "<hr>";
        }
    } 

    $aluno1 = new Pessoa();
    $aluno1->nome = 'Lana';
    $aluno1->idade = 17;
    $aluno1->apresentar();

    $aluno2 = new Pessoa();
    $aluno2->nome = 'Lucas';
    $aluno2->idade = 19;
    $aluno2->apresentar();
?>