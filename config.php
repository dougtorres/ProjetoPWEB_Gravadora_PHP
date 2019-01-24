<?php
include_once 'usuario.php';

$url = "http://localhost/gravadora/";


function dados(){

$lines = file('dados.txt');

$dados["host"] = trim($lines[0]);
$dados["banco"] = trim($lines[1]);
$dados["usuario"] = trim($lines[2]);
if(isset($lines[3])) $dados["senha"] = $lines[3];
else $dados["senha"] = "";

return $dados;
}
/*
function cadastrarUsuario($nome, $login, $senha){

	try {

		$dados = dados();
		$bd = new PDO("mysql:host=".$dados["host"].";dbname=".$dados["banco"], $dados["usuario"], $dados["senha"]);
		$count = $bd->exec("INSERT INTO usuario VALUES('$nome', '$login', '$senha')");
		echo "Linhas afetadas: ".$count;
	}catch(PDOException $e){

		print "erro: ".$e->getMessage()." <br>";
		die();
	}
	
}
*/
/*
interface Usuario_IF{
	public function cadastrar($usuario);
}
*/

	class login{
		
		private $bd;

		function __construct(){
			$dados = dados();
			$this->bd = new PDO("mysql:host=".$dados["host"].";dbname=".$dados["banco"], $dados["usuario"], $dados["senha"], array(PDO::ATTR_PERSISTENT=>true));
		}
		
		public function logar($login, $senha){
			
			$stmt = $this->bd->prepare(
					"SELECT * FROM usuario WHERE login = :login AND senha = :senha");
			if($stmt){
				$stmt->bindParam(":login", $login,PDO::PARAM_STR);
				$stmt->bindParam(":senha", md5($senha),PDO::PARAM_STR);
				$stmt->execute();
				$dados = $stmt->fetchAll();
				
				if($stmt->rowCount()>0){
					
					session_start();
					$_SESSION["logado"]=true;
					$_SESSION["nome"]=$dados[0]["nome"];
					return true;
				}
				else{
					header("Location:login-incorreto.php");
					return false;
				}
			}
			
			else {
			header("Location:login-incorreto.php");
			return false;
			}
		}
		
		public function logout(){
			
			session_start();
			session_unset();
		
		}
		
		
	}

	class UsuarioDAO 
	{
	
	private $bd;
	
	function __construct(){
		$dados = dados();
		$this->bd = new PDO("mysql:host=".$dados["host"].";dbname=".$dados["banco"], $dados["usuario"], $dados["senha"], array(PDO::ATTR_PERSISTENT=>true));
	}
	
	public function cadastrarUsuario($usuario) {
		$stmt = $this->bd->prepare(
				"INSERT INTO usuario VALUES(null, :nome,:login,:senha)");
		if($stmt){
			$nome = $usuario->getNome();
			$login = $usuario->getLogin();
			$senha =  $usuario->getSenha();
			$stmt->bindParam(":nome", $nome,PDO::PARAM_STR);
			$stmt->bindParam(":login", $login,PDO::PARAM_STR);
			$stmt->bindParam(":senha", $senha,PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount()>0)
				return true;
			else return false;
		}
		else return false;
	}
}

	class CantorDAO 
	{
	
	private $bd;
	
	function __construct(){
		$dados = dados();
		$this->bd = new PDO("mysql:host=".$dados["host"].";dbname=".$dados["banco"], $dados["usuario"], $dados["senha"], array(PDO::ATTR_PERSISTENT=>true));
	}
	

	public function cadastrarCantor($cantor) {
		$stmt = $this->bd->prepare(
				"INSERT INTO cantor VALUES(null, :nome)");
		if($stmt){
			$nome = $cantor->getNome();
			$stmt->bindParam(":nome", $nome,PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount()>0)
				return true;
			else return false;
		}
		else return false;
	}
	
	public function getCantores(){
		$stmt = $this->bd->prepare(
				"SELECT * FROM cantor");
		if($stmt){
			$stmt->execute();
			$resultado = $stmt->fetchAll();
			if(is_array($resultado))
				return $resultado;
			else return false;
		}
		else return false;
	
	}
}

	class CdDAO 
	{
	
	private $bd;
	
	function __construct(){
		$dados = dados();
		$this->bd = new PDO("mysql:host=".$dados["host"].";dbname=".$dados["banco"], $dados["usuario"], $dados["senha"], array(PDO::ATTR_PERSISTENT=>true));
	}
	

	public function cadastrarCd($cd) {
		$stmt = $this->bd->prepare(
				"INSERT INTO cd VALUES(null, :titulo, :dataDeLancamento, :codigo_cantor)");
		if($stmt){
			$titulo = $cd->getTitulo();
			$dataDeLancamento = $cd->getDataDeLancamento();
			$codigo_cantor = $cd->getCodigoCantor();

			$stmt->bindParam(":titulo", $titulo,PDO::PARAM_STR);
			$stmt->bindParam(":dataDeLancamento", $dataDeLancamento,PDO::PARAM_STR);
			$stmt->bindParam(":codigo_cantor", $codigo_cantor,PDO::PARAM_STR);
			
			$stmt->execute();
			if($stmt->rowCount()>0)
				return true;
			else return false;
		}
		else return false;
	}
	

}


?>