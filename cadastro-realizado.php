<?php

require_once('config.php');
require_once 'usuario.php';

if($_POST["senha"] == $_POST["confirma"]){

//$teste = md5($_POST["senha"]);

//$usuario = new Usuario($_POST['nome'], $_POST["login"], md5($_POST["senha"]));
$usuario = new Usuario($_POST['nome'], $_POST["login"], md5($_POST["senha"]));


$obj = new UsuarioDAO();
if($obj->cadastrarUsuario($usuario))
	echo "<h2> Cadastro realizado com sucesso! </h2>";

else
	echo "<h2> Ocorreu um erro! </h2>";
}
else{
	
	$redirect = "index-cadastro.php?index-cadastro=cadastro.php&error=As+senhas+estao+erradas!";
	header("location:$redirect");
}

?>

