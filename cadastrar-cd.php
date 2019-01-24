
<div class="container" align="center">
<br>
<br>
<br>
<h4 class="col-md-offset-3 col-md-4 ">Gravadora 1.0 - Cadastrar CD</h4>
<br>
<br>
<div id="login" class="jumbotron col-md-4 col-md-offset-3">


<form class="form-horizontal" role="form" action ="cadastro-cd-realizado.php" method="post" >

<div class="form-group">
<label for="login" class="col-sm-2 control-label" >Titulo:</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="Digite o titulo do cd" name="titulo"/>
</div>
</div>
<div class="form-group">
<label for="login" class="col-sm-2 control-label" >Data:</label>
<div class="col-sm-10">
<input type="text" class="form-control" placeholder="Digite a data de lançamento do cd" name="dataDeLancamento"/>
</div>
</div>

<div class="form-group">
<label for="login" class="col-sm-2 control-label" >Cantor</label>
<div class="col-sm-10">
<?php

		$dbh = new PDO("mysql:host=localhost;dbname=gravadora", "root", "");		
		$sql =  "select * from cantor ";
		echo	"<select class='form-control'  name='codigo_cantor'>";
		$obj = new CantorDAO();
		$resultado = $obj->getCantores();
			foreach ($resultado as $row) {
			echo "<option value = ".$row['id'].">";
			print $row['nome'];
			echo "</option>";
		}
		unset($dbh);
		echo "</select>";
		?>
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


