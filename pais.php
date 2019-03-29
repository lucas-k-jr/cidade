<?php

    include("estado.php");
    class Pais
    {
        private $nome;
        private $sigla;
        private $estados;

        public function __construct($n, $s)
        {
            $this->nome = $n;
        }

        public function adicionar_estado($n, $s)
        {
            $this->estados[] = new Estado($n);
        }
        
        public function get_nome()
        {
            return($this->nome);
        }

        public function get_sigla()
        {
            return($this->sigla);
        }

    }
?>
