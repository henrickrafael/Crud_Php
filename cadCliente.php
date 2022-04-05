<?php include ('conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
	<title>Cadastro de clientes</title>
</head>
<body>
	<div class="menu">
		<div class="menu_item">
			<a href="#">
				<span>Cadastro de clientes</span>
			</a>
		</div>
		<div class="menu_item">
			<a href="relCliente.php">
				<span>Relatório de clientes</span>
			</a>
		</div>
		<div class="menu_item">
			<a href="#">
				<span>Cadastro de funcionários</span>
			</a>
		</div>
		<div class="menu_item">
			<a href="#">
				<span>Relatório de funcionários</span>
			</a>
		</div>
		<div class="menu_item logout">
			<a href="#">
				<span>Sair</span>
			</a>
		</div>
	</div> <!-- Menu -->
	<div class="main">
		<div class="header">
			<h2>Cadastro de clientes</h2>
		</div> <!-- Header --> 
		<form action="#" method="POST">
			<div class="fieldWrapper">
				<div class="inputWrapper"> 
					<input placeholder="Nome" name="nome" type="text" required>
				</div>
				<div class="inputWrapper"> 
					<input placeholder="Idade" name="idade" type="number" min="0" required>
				</div>
				<div class="inputWrapper"> 
					<input placeholder="E-mail" name="email" type="email" required>
				</div>
				<div class="inputWrapper"> 
					<input placeholder="Telefone" maxlength="11" name="fone" type="text" required>
				</div> 
				<div class="inputWrapper radioInput"> 
					<span class="title">Sexo:</span>
					<div class="radio-wp">
						<input type="radio" name="sexo" value="M" checked required> <span>Masculino</span>
					</div> <!-- radio-wp -->
					<div class="radio-wp">
						<input type="radio" name="sexo" value="F"> <span>Feminino</span>
					</div> <!-- radio-wp -->
				</div> <!-- inputWrapper radioInput -->
				<div class="button-wp">
				<div class="button">
					<input id="novo" type="submit" name="botao" value="Novo">
				</div>
				<div class="button">
					<input id="salvar" type="submit" name="botao" value="Salvar">
				</div>
			</div>
			</div> <!-- fieldWrapper -->
		</form>
	</div> <!-- main -->
</body>
</html>

<?php 

@$id = $_POST['id'];
@$nome = $_POST['nome'];
@$idade = $_POST['idade'];
@$sexo = $_POST['sexo'];
@$email = $_POST['email'];
@$fone = $_POST['fone'];


if(@$_REQUEST['botao'] == "Salvar") {

	$insert = "INSERT INTO cliente (nome, idade, email, telefone, sexo) VALUES ('$nome','$idade','$email','$fone','$sexo') ";
	$sql = mysqli_query($con, $insert);

	if(!$sql) {
		echo mysqli_error($con);
	} else {
		echo "<script>alert('Registro inserido com sucesso!')</script>";
	}

}

?>