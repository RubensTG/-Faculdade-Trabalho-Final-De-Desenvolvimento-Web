<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<html lang="pt-br">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<main id="main">
		<h1 id="login">Login</h1>
		<fieldset>
			<form id="form">
				<div class="usuarioInput">
					<input class="Usuario" type="text" name="Usuario" placeholder="Usuário ou E-mail"> <?php include "../img/user.svg"?>
				</div>
				<div class="passwordInput">
					<input type="password" name="Senha" placeholder="Senha"> <?php include "../img/locked.svg";?>
				</div>
				<div>
					<input type="submit" value="Entrar">
					<a href="../html/cadastroCliente.php">LiNK</a>
				</div>
			</form>
		</fieldset>	
	</main>
</body>
</html>