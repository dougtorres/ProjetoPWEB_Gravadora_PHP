<?php

	try{

	$dbh = new PDO("mysql:host=localhost;dbname=gravadora", "root", "");
	
	$stmt = $dbh->prepare("SELECT * FROM CD");
	//$stmt->bindParam(':nomeCurso', $nomeCurso, PDO::PARAM_STR, 20);
	//$stmt->bindParam(':matricula', $matricula, PDO::PARAM_INT);
	//$stmt->bindParam(':nome', $nome, PDO::PARAM_STR, 100);

	$stmt->execute();
	
	$resultado = $stmt->fetchAll();

	

	if(!$resultado)
		echo 'deu nda';
	else
	echo "<table border>";
	echo "<th>"."Codigo"."</th>";
	echo "<th>"."Titulo"."</th>";
	echo "<th>"."Data de Lançamento"."</th>";
	echo "<th>"."Codigo do cantor"."</th>";
	foreach($resultado as $row){
		
		//echo $row['nomeCurso'].'<br/>';
		echo "<tr>";
		echo "<td>";	
		echo $row['codigo'].'<br/>';
		echo "</td>";

		echo "<td>";
		echo $row['titulo'].'<br/>';
		echo "</td>";
	
		echo "<td>";	
		echo $row['data_lancamento'].'<br/>';
		echo "</td>";

		echo "<td>";
		echo $row['codigo_cantor'].'<br/>';
		echo "</td>";
	
		echo "</tr>";
	
	}
	echo "CDs Cadastrados";
//	$sql =  "insert into Curso values($codigo,'$nome')";
	/*
	$sql =  "select * from aluno a join curso c on(a.codigoCurso = c.codigo)";

	echo "<table border>";
	echo "<th>"."Nome Do Curso"."</th>";
	echo "<th>"."Matricula"."</th>";
	echo "<th>"."Nome do aluno"."</th>";
	foreach ($dbh->query($sql) as $row) {
		echo "<tr>";
		echo "<td>";
		print '<br>'.$row['nomeCurso'].'<br>';
		echo "</td>";


		echo "<td>";
		print '<br>'.$row['matricula'].'<br>';
		echo "</td>";
		
		echo "<td>";
		print '<br>'.$row['nome'].'<br>';
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	*/
	unset($dbh);
	//$db = null;
	}catch(PDOException $exc){
		echo $exc->getMessage();
		
	}
	?>