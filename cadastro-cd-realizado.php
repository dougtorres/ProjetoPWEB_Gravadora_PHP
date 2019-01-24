<?php

require_once('config.php');
require_once 'cd.php';


//$teste = md5($_POST["senha"]);
//$teste = $_POST["senha"];

//echo $teste;

//$usuario = new Usuario($_POST['nome'], $_POST["login"], md5($_POST["senha"]));
$cd = new Cd($_POST['titulo'], $_POST['dataDeLancamento'], $_POST['codigo_cantor']);



$obj = new CdDAO();

if($obj->cadastrarCd($cd)){
	echo "<h2> Cadastro realizado com sucesso! </h2>";

}else{
	//echo "<h2> Ocorreu um erro! </h2>";
	//$redirect = "index-cadastro.php?index-cadastro=cadastro.php&error=errograve!";
	//header("location:$redirect");
}

?>

