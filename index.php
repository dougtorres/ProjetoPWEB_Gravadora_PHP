<!DOCTYPE HTML>


<html>
<head>
<?php 
require_once 'config.php';
?>
		<title>Gravadora</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href=<?php echo "'$url"."css/bootstrap.min.css'"; ?>>
		<link rel="stylesheet" href=<?php echo "'$url"."css/bootstrap-theme.min.css'"; ?>>
		<script src=<?php echo "'$url"."js/bootstrap.min.js'"; ?>></script>
		 <link href=<?php echo "'$url"."css/style.css'"; ?> rel="stylesheet">

	</head>

<body>
<div class="container" align="center">


<br>
<br>
<br>
<h4 class="col-md-offset-3 col-md-4 ">Gravadora 1.0</h4>
<br>

<br>
<div id="login" class="jumbotron col-md-4 col-md-offset-3">

<form class="form-horizontal" role="form" action ="valida.php" method="post" >
<div class="form-group">
<label for="login" class="col-sm-2 control-label" >Login:</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="Digite o login" name="login"/>
</div>
</div>
<div class="form-group">
<label for="senha"  class="col-sm-2 control-label">Senha:</label>
<div class="col-sm-10">
<input type="password" class="form-control input-block-level" placeholder="Digite a senha" name="senha"/>
</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-1 col-sm-10">
		<button type="submit" class="btn btn-default">Logar</button>
	</div>
	</div>
</form>


</div>
<!--
<form class="form-horizontal" role="form">
<div class="form-group">
<label for="login" class="col-sm-2 control-label" >Login:</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="Digite o login"/>
</div>
</div>
<div class="form-group">
<label for="senha"  class="col-sm-2 control-label">Senha:</label>
<div class="col-sm-10">
<input type="password" class="form-control" placeholder="Digite a senha" />
</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-1 col-sm-10">
		<button type="submit" class="btn btn-default">Logar</button>
	</div>
	</div>
</form>
<p id="cadastre">Ainda não tem login?<br><a href="index-cadastro.php?index-cadastro=cadastro.php">Cadastre aqui!</a></p>
</div>

-->
</div>
</body>

</html>
