<?php 

    class Usuario{
        public $id;
        public $nome;
        public $email;
        public $telefone;
        public $dataNascimento;
        public $senha;
        public $papel;

        function __construct($id_informado, $nome_informado, $email_informado, $telefone_informado, $dataNascimento_informada, $senha_informada, $papel_informado){
            $this->id = $id_informado;
            $this->nome = $nome_informado;
            $this->email = $email_informado;
            $this->telefone = $telefone_informado;
            $this->dataNascimento = $dataNascimento_informada;
            $this->senha = $senha_informada;
            $this->papel = $papel_informado;
        }

        
    }
?>
