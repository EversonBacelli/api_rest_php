<?php 
   

   function pegar_usuario($conexao){

    $sql = "SELECT * FROM tbl_usuarios";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $usuarios = [];

    while ($registro = mysqli_fetch_array($res)) {
        $id = utf8_encode( $registro['id']);
        $nome = utf8_encode($registro['nome']);
        $email = utf8_encode(  $registro['email']);
        $telefone = utf8_encode( $registro['telefone']);
        $dataNascimento = utf8_encode( $registro['dataNascimento']);
        $senha = utf8_encode( $registro['senha']);
        $papel = utf8_encode( $registro['papel']);
        
        $novo_usuario = new Usuario($id, $nome, $email, $telefone, $dataNascimento, $senha, $papel);
        array_push($usuarios ,$novo_usuario);
    };
    
    fecharConexao($conexao);
    return $usuarios;
   };

   
?>