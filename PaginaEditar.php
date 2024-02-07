

<?php
	require_once("config.php");


   $id = $_POST["id"];
   $nome = $_POST["nome"];
   $sobrenome = $_POST["sobrenome"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];
   $endereco = $_POST["endereco"];
   $bairro = $_POST["bairro"];
   $cidade = $_POST["cidade"];
   $estado = $_POST["estado"];
   $cep = $_POST["cep"];

?>

<html>
	<head>
		<title>CRUD</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/index.css" media="screen" />
	</head>
	<body>
	<div class="row">
		<div class="col-md-12 cabecalho">
			<div class="col-md-12 d-flex align-items-center cabecalho_itens">
				
				<img src="src/usuario.png" class="mr-2" />
				<div class="teste">
					<h1>Editar</h1>	
				</div>
				
			</div>
		</div>
		</div>
	
	</div>
	<div class="row formularios">
		<div class="col-md-11 formulario">
			<form action="Editar.php" method="post">
			  <div class="form-row">
				<div class="col">
                <?php
				   echo "<input type='hidden' class='form-control' placeholder='id' name='id' value='$id'>";
                  ?>
				  <label for="inputEmail4">Nome</label>
                  <?php
				   echo "<input type='text' class='form-control' placeholder='Nome' name='nome' value='$nome' required>";
                  ?>
				</div>
				
				<div class="col">
				  <label for="inputEmail4">Sobrenome</label>
                  <?php
				     echo "<input type='text' class='form-control' placeholder='Sobrenome' name='sobrenome' value='$sobrenome' required>";
                   ?>
				</div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputEmail4">E-mail</label>
                  <?php
				     echo "<input type='email' class='form-control' placeholder='Email' name='email' value='$email' required>";
                   ?>
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4">Senha</label>
                  <?php
				     echo "<input type='password' class='form-control' placeholder='Senha' name='senha' value='$senha' required>";
                   ?>
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputAddress">Endereço</label>
				<?php
				     echo "<input type='text' class='form-control' placeholder='Endereço' name='endereco' value='$endereco' required>";
                   ?>
			  </div>
			  <div class="form-group">
				<label for="inputAddress2">Bairro</label>
				<?php
				     echo "<input type='text' class='form-control' placeholder='Bairro' name='bairro' value='$bairro' required>";
                   ?>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputCity">Cidade</label>
				  <?php
				     echo "<input type='text' class='form-control' placeholder='Cidade' name='cidade' value='$cidade' required>";
                   ?>
				</div>
				<div class="form-group col-md-4">
				  <label for="inputState">Estado</label>
				  <?php
				     echo "<input type='text' class='form-control' placeholder='Estado' name='estado' value='$estado' required>";
                   ?>
				</div>
				<div class="form-group col-md-2">
				  <label for="inputZip">CEP</label>
				  <?php
				     echo "<input type='text' class='form-control' placeholder='CEP' name='cep' value='$cep' required>";
                   ?>
				</div>
			  </div>
			 
			  <button type="submit" class="btn btn-primary btn_cadastrar">Editar</button>       		  
			</form>
		</div>
		
	</div>
	</body>
</html>