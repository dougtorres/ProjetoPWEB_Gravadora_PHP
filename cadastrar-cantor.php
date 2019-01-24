
<div class="container" align="center">
<br>
<br>
<br>
<h4 class="col-md-offset-3 col-md-4 ">Gravadora 1.0 - Cadastrar Cantor</h4>
<br>
<br>
<div id="login" class="jumbotron col-md-4 col-md-offset-3">


<form class="form-horizontal" role="form" action ="cadastro-cantor-realizado.php" method="post" >

<div class="form-group">
<label for="login" class="col-sm-2 control-label" >Nome:</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="Digite o nome" name="nome"/>
</div>
</div>


<div class="form-group">
	<div class="col-sm-offset-1 col-sm-10">
		<button type="submit" class="btn btn-default">Cadastrar</button>
	</div>
	</div>
</form>
<?php 
   
if(isset($_GET["error"]))echo $_GET["error"];
?>
</div>
</div>


