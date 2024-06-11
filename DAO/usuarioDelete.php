<?php 
   

   function deletar_usuario($conexao, $id){

        $sql = "DELETE FROM tbl_usuarios WHERE id = $id;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar deletar");


        fecharConexao($conexao);
        return $res;
   };

   
   
?>