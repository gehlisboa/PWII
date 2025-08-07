<?php
//quando se usa o private é obrigatorio ter Get e Set

     class Aluno {
        public $nome;
        private $rm;

        public function setRM($valor) {
            $this->rm = $valor;
        }

        public function getRM() {
            return $this->rm;
        }
     }

     $aluno1 = new Aluno();
     $aluno1->nome = 'Selena';
     $aluno1->setRM(99876);
     echo "Meu nome é $aluno1->nome <br>";
     echo "Meu RM é " . $aluno1->getRM();
?>