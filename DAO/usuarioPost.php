<?php 
   
   function incluir_usuario($conexao, $u){

        $sql = "INSERT INTO tbl_usuarios (nome, email, telefone, dataNascimento, senha, papel) VALUES ('$u->nome', '$u->email','$u->telefone', '$u->dataNascimento', '$u->senha','$u->papel');";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>