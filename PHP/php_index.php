<html>
	<head>
		<title>Gym</title>
		 <meta charset="UTF-8">
	</head>
	<body>
		<form id="cadCustumer" method="POST" action="php_InsereRegistro.php">
			<input type="hidden" value=""> </input>
			<input type="text" placeholder="Digite seu nome"> <br>
			
			<select>
				<?php
				for ($n = 14; $n <= 100; $n++) {
					echo '<option value="'.$n.'">'.$n.'</option>';
				}
				?>
			</select> <br>
			<!-- prossegui criacao de campos para teste de funcionalidade dos inserts -->
			<input type="text" placeholder="Digite sua cidade"> <br>
			<select>
				<option value="masculino">Masculino</option>
				<option value="feminino">Faminino</option>
			</select> <br>
			<input type="checkbox" value="Perda de Peso"> Perda de Peso </input> <br>
			<input type="checkbox" value="Ganho de Massa"> Ganho de Massa </input> <br>
			<input type="submit"> </input>
		</form>
	</body>
</html>