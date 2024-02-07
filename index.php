	<?php
		require_once("ClasseUsuario.php");
		require_once("config.php");
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
					<h1>Usuários</h1>	
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="row formularios">

		
		<div class="col-md-6 formulario">
		
			
			<form action="ProcessamentoDoFormulario.php" class="nome" method="post">
			  <div class="form-row">
				<div class="col">
				  <label for="inputEmail4">Nome</label>
				  <input type="text" class="form-control" placeholder="Nome" name="nome" required>
				</div>
				
				<div class="col">
				  <label for="inputEmail4">Sobrenome</label>
				  <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" required>
				</div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputEmail4">E-mail</label>
				  <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail" name="email" required>
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4">Senha</label>
				  <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputAddress">Endereço</label>
				<input type="text" class="form-control" id="inputAddress" name="endereco" required>
			  </div>
			  <div class="form-group">
				<label for="inputAddress2">Bairro</label>
				<input type="text" class="form-control" id="inputAddress2" name="bairro" required>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputCity">Cidade</label>
				  <input type="text" class="form-control" id="inputCity" name="cidade" required>
				</div>
				<div class="form-group col-md-4">
				  <label for="inputState">Estado</label>
				  <input type='text' class='form-control' name='estado' required>
				</div>
				<div class="form-group col-md-2">
				  <label for="inputZip">CEP</label>
				  <input type="text" class="form-control" id="inputZip" name="cep" required>
				</div>
			  </div>
			 
			  <button type="submit" class="btn btn-primary btn_cadastrar">Cadastrar</button>
			  

			  
			</form>
		</div>
		<div class="col-md-6 lista">
				<ul class="list-group lista_usuarios">
				
					<?php

						
						
						$host = "localhost";
						$dbname = "controle_de_estoque";
						$username = "root";
						$password = "phporientado123";
						$port = 3306;

						$listagem = new mysqli($host, $username, $password, $dbname, $port);
					
						$sql ="SELECT * FROM user";

						$resultado = $listagem->query($sql);
						


						while($row = $resultado->fetch_row()){
						$usuario = new Usuario();
						$usuario->setNome($row[0]);



						echo "
						<form method='post' action='PaginaEditar.php'>
						
						<li class='list-group-item d-flex justify-content-between align-items-center'>
						<ul>
							

							
							<input type='hidden' value='$row[0]' name='id'/>
							<input type='hidden' value='$row[1]' name='nome'/>
							<input type='hidden' value='$row[2]' name='sobrenome'/>
							<input type='hidden' value='$row[3]' name='email'/>
							<input type='hidden' value='$row[4]' name='senha'/>
							<input type='hidden' value='$row[5]' name='endereco'/>
							<input type='hidden' value='$row[6]' name='bairro'/>
							<input type='hidden' value='$row[7]' name='cidade'/>
							<input type='hidden' value='$row[8]' name='estado'/>
							<input type='hidden' value='$row[9]' name='cep'/>
							<li name='nome'><b>Nome:</b> $row[1] $row[2]</l1>
							<li><b>Email:</b> $row[3]</l1>
							<li><b>Endereço:</b> $row[5]</l1>
							<li><b>Bairro:</b> $row[6]</l1>
							<li><b>Cidade:</b> $row[7]</l1>
							<li><b>Estado:</b> $row[8]</l1>	
							
						</ul>
						<button type='submit' class='btn btn-warning btn_editar ml-auto mr-2'>Editar</button><button type='button' onclick='redirecionarParaDeletar($row[0])' class='btn btn-danger btn_deletar'>Deletar</button></li>
						</form>
						
						";
						}

				
						?> 
					</ul>

						<script>


								
							function redirecionarParaDeletar(id){
								window.location.href = 'deletar.php?id=' + id;
							}
						
					
						</script>
			
		</div>
	</body>
</html>