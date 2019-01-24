<!DOCTYPE html>
<html lang="en">
<?php 
include_once 'config.php';
session_start();
if (!$_SESSION['logado'])
	header("Location:index.php");
  
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SysGravadora 1.0 - Dashboard</title>

    <link rel="stylesheet" href=<?php echo "'$url"."css/bootstrap.min.css'"; ?>>
		<link rel="stylesheet" href=<?php echo "'$url"."css/bootstrap-theme.min.css'"; ?>>
		<script src=<?php echo "'$url"."js/bootstrap.min.js'"; ?>></script>
		 <link href=<?php echo "'$url"."css/style.css'"; ?> rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SysGravadora 1.0</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo "Olá, ".$_SESSION['nome']?></a></li>
            <li><a href="valida.php?logout=true">Sair</a></li>
          </ul>
     
        </div>
      </div>
    </nav>