<?php 
   
   function editar_usuario($conexao, $u, $id){

        $sql = "UPDATE tbl_usuarios SET nome = '$u->nome', email = '$u->email', telefone = '$u->telefone', dataNascimento = '$u->dataNascimento', senha='$u->senha', papel = '$u->papel' WHERE id = $id;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>