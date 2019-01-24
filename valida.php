
<?php 

include('config.php');
if(isset($_POST["login"]) && isset($_POST["senha"])){

$login = new login();
if($login->logar($_POST["login"], $_POST["senha"]))
{
	header("Location:dashboard.php");
}
else{
	//echo "Senha invalida! ";
	header("Location:login-incorreto.php");
}
}elseif (isset($_GET["logout"])){
	$login = new login();
	$login->logout();
	header("Location:index.php");
}
?>