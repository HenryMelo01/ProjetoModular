<html>
	<head>
		<title>Gym</title>
		<meta charset="UTF-8">
		<script>
			document.getElementById("go").onclick = function () {
				double i =0;
				if (objEmagrecer.checked) {
					document.getElementById("goalsList[]").value += document.getElementById("objEmagrecer").value +",";
					i++;
				}
				if (objCrescer.checked) {
					
					i++;
				} 
			};
		</script>
	</head>
	<body>
		<form id="cadCustumer" method="POST" action="php_InsereRegistro.php">
		
			<input type="hidden" value="{" id="goalsList[]"> </input>
			<input type="text" placeholder="Digite seu nome" id="name"> <br>
			
			<select id="age">
				<?php
					for ($n = 14; $n <= 100; $n++) {
						echo '<option value="'.$n.'">'.$n.'</option>';
					}
				?>
			</select> <br>
			
			<select id="neighborhood">
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
			
			<select id="gender">
				<option value="masculino">Masculino</option>
				<option value="feminino">Faminino</option>
			</select> <br>
			
			<input type="checkbox" value="Perda de Peso" id="objEmagrecer"> Perda de Peso </input> <br>
			<input type="checkbox" value="Ganho de Massa" id="objCrescer"> Ganho de Massa </input> <br>
			<input type="checkbox" value="Ganho de Condicionamento" id="objCond"> Ganho de Condicionamento </input> <br>
			<input type="checkbox" value="Bem Estar Social" id="objSoci"> Bem Estar Social </input> <br>
			

			<input type="submit" id="go"> </input>
		</form>
	</body>
</html>