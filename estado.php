<?php

    include("cidade.php");

    class Estado
    {
        private $nome;
        private $sigla;
        private $cidades;
        
        public function __construct($n, $s)
        {
            $this->nome = $n;
            $this->sigla = $s;
        }

        public function get_nome()
        {
            return($this->nome);
        }

        public function get_sigla()
        {
            return($this->sigla);
        }

        public function adicionar_cidade($n)
        {
            // agregação:
            $this->cidades[] = new Cidade($n); 
            /////////////////////////////////////
            // Composição:
            //public function adicionar_cidade(Cidade $c) 
            //{
            //  $this->cidade[] = $c;
            //}
            // A diferença entre os dois:
            // Ao excluir estado somente o estado se exclui mas cidade continua (agregação)
            // Ao excluir estado as cidades se excluem (composição)
        }   
    }
?>