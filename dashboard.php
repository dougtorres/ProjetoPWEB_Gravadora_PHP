
<?php 

include('dashboard-nav.php');

        
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="<?php if(isset($_GET["inicio"]))echo $_GET["inicio"]; ?>"><a href=<?php echo "'$url"."dashboard.php?inicio=active&container=inicio-dash.php'"; ?>>Inicio <span class="sr-only">(current)</span></a></li>
            <li class="<?php if(isset($_GET["usuario"]))echo $_GET["usuario"]; ?>"><a href=<?php echo "'$url"."dashboard.php?cd=active&container=cadastro.php'"; ?>>Cadastrar Usuario</a></li>

            <li class="<?php if(isset($_GET["cd"]))echo $_GET["cd"]; ?>"><a href=<?php echo "'$url"."dashboard.php?cd=active&container=cadastrar-cd.php'"; ?>>Cadastrar CD</a></li>
            <li class="<?php if(isset($_GET["cantor"]))echo $_GET["cantor"]; ?>"><a href=<?php echo "'$url"."dashboard.php?cantor=active&container=cadastrar-cantor.php'"; ?>>Cadastrar Cantor</a></li>
            <li class="<?php if(isset($_GET["consultas"]))echo $_GET["consultas"]; ?>"><a href=<?php echo "'$url"."dashboard.php?consultas=active&container=consultas.php'"; ?>>Realizar Consultas</a></li>
    
          </ul>
        
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      	<?php 
        
        if(isset($_GET["container"]))include($_GET["container"]); 
        
      	?>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src=<?php echo "'$url"."js/bootstrap.min.js'"; ?>></script>

  </body>
</html>
