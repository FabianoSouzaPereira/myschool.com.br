<!Doctype html>
<html lang="pt-br">
<head>
    <title>Mercado PW</title>
    <meta charset="utf8">
    <!-- Chamada do CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<form id="login" action="" method="post" class="panel panel-warning">
		<div class="panel-heading">
			<h3>Acesso Restrito - Fa�a seu login</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="email">E-mail</label> <input type="text"
					class="form-control" name="email" id="email"
					placeholder="Digite seu e-mail de acesso" required autofocus>
			</div>
			<div class="form-group">
				<label for="password">Senha</label> <input type="password"
					class="form-control" name="password" id="password"
					placeholder="Digite sua senha" required autofocus>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Acessar"> <a
					href="" class="label label-warning" style="float: right;">Esqueci a
					senha!</a>
			</div>
		</div>
	</form>
</body>
</html>