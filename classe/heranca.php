<?php
//Classe PAI
    class Pessoa {
        public $nome;
        public $tipo;

        public function mostrarTipo() {
            echo "A pessoa $this->nome é do tipo $this->tipo <hr>";
        }
    }
     // extends é usada para implementar a herança entre classes.
     //ela permite que uma classe filha herde características (propriedades) da classe pai. I
    class PessoaComum extends Pessoa {
        public $cpf;
    }

    class Empresa extends Pessoa{
        public $cnpj;
    }

    $pessoa = new PessoaComum();
    $pessoa->nome = 'Helena';
    $pessoa->tipo = 'física';

    $empresa = new Empresa();
    $empresa->nome = 'Software Ltda';
    $empresa->tipo = 'jurídica';

    $pessoa->mostrarTipo();
    $empresa->mostrarTipo();

?>