<?php
	include("php_conexaoBanco.php");
	$conn = abrirConexao();
	$nome = $_POST['inputName'];
	$idade = $_POST['inputIdade'];
	$sexo = $_POST['inputSexo'];
	$cidade = $_POST['inputCidade'];
	$bairro = $_POST['inputBairro'];
	if($sexo == "masculino"){
		$sexo = 1;
	}else{
		$sexo = 0;
	}
	$query= "INSERT INTO custumer(nome, idade, sexo, cidade, bairro) VALUES ('".$nome."',".$idade.",'".$sexo."','".$cidade."','".$bairro."')";
	@mysqli_query($conn, $query);
	fecharConexao();
?>