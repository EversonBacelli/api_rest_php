<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDados(){
            $dados = json_decode(file_get_contents('php://input'));
            $nome = $dados->nome;
            $email = $dados->email;
            $telefone = $dados->telefone;
            $dataNascimento = $dados->dataNascimento;
            $senha = $dados->senha;
            $papel = $dados->papel;
    
            $user = new Usuario("", $nome, $email, $telefone, $dataNascimento, $senha, $papel);
            return $user;
        }
?>