<?php

require_once('config.php');
require_once 'cantor.php';


//$teste = md5($_POST["senha"]);
//$teste = $_POST["senha"];

//echo $teste;

//$usuario = new Usuario($_POST['nome'], $_POST["login"], md5($_POST["senha"]));
$cantor = new Cantor($_POST['nome']);



$obj = new CantorDAO();
if($obj->cadastrarCantor($cantor)){
	echo "<h2> Cadastro realizado com sucesso! </h2>";

}else{
	echo "<h2> Ocorreu um erro! </h2>";
	$redirect = "index-cadastro.php?index-cadastro=cadastro.php&error=As+senhas+estao+erradas!";
	header("location:$redirect");
}

?>

