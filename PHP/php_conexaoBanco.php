<?php
    function abrirConexao(){
        $servidor='localhost';
        $usuario='root';
        $senha='';
        $conn = mysqli_connect($servidor, $usuario, $senha) or die ("ERRO: Conex�o falhou.");
        mysqli_select_db($conn, 'bdtesteprojetomodular') or die ("ERRO: N�o selecionou o banco de dados.");
        return $conn;
    }
    function fecharConexao($conn){
        mysqli_close($conn);
    }
 ?>