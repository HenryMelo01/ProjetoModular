<?php
	include("php_conexaoBanco.php");
	$conn = abrirConexao();
	$nome = $_POST['inputName'];
	$idade = $_POST['inputIdade'];
	$sexo = $_POST['inputSexo'];
	$bairro = $_POST['inputBairro'];
	if($sexo == "masculino"){
		$sexo = 1;
	}else{
		$sexo = 0;
	}
	$query= "INSERT INTO custumer(nome, idade, sexo, ID_neighborhood) VALUES ('".$nome."',".$idade.",".$sexo.",".$bairro.")";
	@mysqli_query($conn, $query);
	fecharConexao($conn);
?>
