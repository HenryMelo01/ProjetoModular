<?php
	include("php_conexaoBanco.php");
	$conn = abrirConexao();
	$nome = $_POST['inputName'];
	$idade = $_POST['inputIdade'];
	$sexo = $_POST['inputSexo'];
	$bairro = $_POST['inputBairro'];
	$stringgoals = $_POST['inputGoals'];
	$listGoals = explode(',', $stringgoals);
	array_pop($listGoals);
	if($sexo == "masculino"){
		$sexo = 1;
	}else{
		$sexo = 0;
	}
	try{
		$query= "INSERT INTO custumer(nome, idade, sexo, ID_neighborhood) VALUES ('".$nome."',".$idade.",".$sexo.",".$bairro.")";
		@mysqli_query($conn, $query);
		$query2= "SELECT MAX(ID_custumer) FROM custumer where nome='".$nome."'";
		$result = @mysqli_query($conn, $query2);
		$fetch = @mysqli_fetch_row($result);
		$ultimoUser = $fetch[0];
		for ($i = 0; $i < count($listGoals); $i++) {
			$query3 ="INSERT INTO goals (ID_custumer, descGoals) VALUES(".$ultimoUser.",'".$listGoals[$i]."')";
			@mysqli_query($conn, $query3);
		}	
	}catch(Exeception $e){
		echo  "<script>alert('".$e -> getMessage()."');</script>";
	}
	fecharConexao($conn);
?>
