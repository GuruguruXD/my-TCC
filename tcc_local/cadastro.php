<?php
	if(isset($_POST['submit'])){
		
		include_once('config.php');

		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$numero = $_POST['numero'];
		$senha = $_POST['senha'];
		$Comfirmasenha = $_POST['Comfirmasenha'];

		$result = mysqli_query($conexao,"INSERT INTO usuarios(nome,sobrenome,email,numero,senha,Confirmasenha) 
		VALUES('$nome','$sobrenome','$email','$numero','$senha','$Comfirmasenha')");
	}


?>





<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="cadastro.css">
<style>
		input[type="submit"]{
    	width: 100%;
    	margin-top: 2.5rem;
    border: none;
    background-color: #5568FE;
    border-radius: 5px;
    cursor: pointer;
    color: #CBD0F7;
    font-size: 1.2rem;
    font-weight: 500;
   
  }</style>




</head>
<body>
	<section class="area-cadastro">
	<div class="container">
		<div class="form">
			<form action="cadastro.php" method="POST">
				<div class="form-header">
					<div class="title">
						<h1>Cadastre-se</h1>
					</div>
					<div class="login">
					
					</div>
				</div>
				<div class="input-group">
					
					<div class="input-box">
						<label for="nome">Primeiro Nome</label>
						<input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
					</div>
					
					<div class="input-box">
						<label for="sobrenome">Sobrenome</label>
						<input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
					</div>

					<div class="input-box">
						<label for="email">E-mail</label>
						<input id="email" type="text" name="email" placeholder="Digite seu email" required>
					</div>
				
					<div class="input-box">
						<label for="numero">Celular</label>
						<input id="numero" type="tel" name="numero" placeholder="(xx) xxxx-xxxx">
					</div>
					
					<div class="input-box">
						<label for="senha">Senha</label>
						<input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
					</div>
					
					<div class="input-box">
						<label for="Comfirmasenha">Confirme Sua Senha</label>
						<input id="Comfirmasenha" type="password" name="Comfirmasenha" placeholder="confirme sua senha" required>
					</div>
					
					<div class="gender-inputs">
						<div class="gender-title">
							<h6>Gênero</h6>
						</div>
					
						<div class="gender-group">
							
							<div class="gender-input">
								<input type="radio" id="genero" name="genero">
								<label for="famale">Feminino</label>
							</div>

							<div class="gender-input">
								<input type="radio" id="genero" name="genero">
								<label for="male">Masculino</label>
							</div>

							<div class="gender-input">
								<input type="radio" id="genero" name="genero">
								<label for="others">Outros</label>
							</div>

							<div class="gender-input">
								<input type="radio" id="genero" name="genero">
								<label for="none">Prefiro Não Dizer</label>
							</div>

						</div>				
					</div>
				</div>
				<div>
					<input type="submit" name="submit" id="submit" href="login.php">
					
				</div>
			</form>
		</div>
	</div>
	</section>
</body>
</html>
