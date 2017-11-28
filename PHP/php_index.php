<!DOCTYPE html>
<html>
	<head>
		<title>Gym</title>
		 <meta charset="UTF-8">
		 <script>
			function addOnList() {
				inputGoals.value="";
				if(objEmagrecer.checked ==true){
					inputGoals.value += objEmagrecer.value+",";
				}
				if(objCrescer.checked ==true){
					inputGoals.value += objCrescer.value+",";
				}
			}
			function verificaVazio(){
				 
				if (inputName.value=="" || inputName.value == null || inputName.value ==" " 
				|| inputGoals.value=="" || inputGoals.value == null || inputGoals.value ==" " 
				|| inputBairro.value =="0" || inputIdade.value == "0" || inputSexo.value == "0"){
					alert("preencha os campos corretamente!");
					return false;
				}else{
					return true;
				}
			}
			
		 </script>
	</head>
	<body>
		<form id="cadCustumer" name="cadCustumer" method="POST" action="php_InsereRegistro.php" onSubmit="return verificaVazio()">
			<input type ="hidden" value="" id="inputGoals" name="inputGoals" required>
			<input type="text" placeholder="Digite seu nome" id="inputName" name="inputName"> <br>	
			<select id="inputIdade" name="inputIdade">
			<option value="0">--Selecione sua idade--</option>
				<?php
					for ($n = 14; $n <= 100; $n++) {
						echo '<option value="'.$n.'">'.$n.'</option>';
					}
				?>
			</select> <br>
			<select id="inputBairro" name="inputBairro">
			<option value="0">--Selecione Seu Bairro--</option>
				<?php
					include("php_conexaoBanco.php");
					$conn = abrirConexao();
					$query = "SELECT * FROM neighborhood";
					$result = mysqli_query($conn, $query);
					while($row = mysqli_fetch_assoc($result)){
						echo "<option value=".$row['ID_neighborhood'].">".$row['descNeighborhood']."</option>";
					}
				?>
			</select> <br>
			<select id="inputSexo" name="inputSexo">
				<option value="0">--Selecione seu Sexo--</option>
				<option value="masculino">Masculino</option>
				<option value="feminino">Faminino</option>
			</select> <br>
			<input type="checkbox" value="Perda de Peso" id="objEmagrecer"> Perda de Peso </input> <br>
			<input type="checkbox" value="Ganho de Massa" id="objCrescer"> Ganho de Massa </input> <br>
			<input type="submit" id="go" onClick="addOnList()"> </input>
		</form>
	</body>
</html>