<?php
require_once("cabecalho.php");
//require_once("home.php");
require_once("logica-usuario.php");
?>

<?php if(usuarioEstaLogado()) {?>
	<p class="text-success"> Você está logado!   <?=usuarioLogado() ?>.</p>
		<a href="logout.php">Deslogar</a>
<?php } else {?>
<body class="login">
	<div class="container login">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="panel panel-default border">
								<div class="panel-heading">
									<span class="input-group-text"> Por favor, conecte-se </span>
								</div><br>	
								<div class="panel-body">
									<form action="login.php" method="post" accept-charset="utf-8" role="form">
										<fieldset>
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
													  	<input class="form-control" placeholder="E-mail" name="email" type="text">	
													</div>
												</div>
												<div class="form-group">
													<div class="input-group">
													  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>	
													  <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
													</div>
												</div>
												<button class="btn btn-lg btn-success btn-block">Entrar</button>
										</fieldset>
									</form>
								</div>
						</div>
				</div>
			</div>
		</div>
	</body>

<?php } ?>
<?php 	include("rodape.php");?>