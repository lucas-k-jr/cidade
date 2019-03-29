<?php

    class Cidade
    {
        private $nome;

        public function __construct($n)
        {
            $this->nome = $n;
        }

        public function get_nome()
        {
            return($this->nome);
        }
    }
?>