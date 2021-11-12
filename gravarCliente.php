<!doctype html>
<html lang="pt-br">
	<head> 

		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

		<title> sistemas </title>

	</head>

	<body>
		<h1> CLIENTES </h1>
		
		<h3> Cadastrar clientes </h3>

		<?php	
			
			// 1 receber os dados do formulario HTML. 

			$nomeCliente 	= $_GET["nomeCliente"] ;
			$nascimento		= $_GET["nascimento"] ;
			$sexo       	= $_GET["sexo"] ;
			$estadoCivil   	= $_GET["estadoCivil"] ;
			$email 			= $_GET["email"] ;
			$ddd1			= $_GET["ddd1"] ;
			$telefone1		= $_GET["telefone1"] ;
			$tipo1			= $_GET["tipo1"] ;
			$ddd2			= $_GET["ddd2"] ;
			$telefone2		= $_GET["telefone2"] ;
			$tipo2			= $_GET["tipo2" ] ;
			$ddd3			= $_GET["ddd3"] ;
			$telefone3		= $_GET["telefone3"] ;
			$tipo3			= $_GET["tipo3"] ;
			$observacoes	= $_GET["observacoes"];
			
			// 2 Validando todos dados básicos recebidos:		

			if ($nomeCliente=="") {

				die("O nome <b>nomeCliente</b> deve ser informado. STOPPED.");
			}

			if ($nascimento=="") {

				die("A data de nascimento <b>nascimento</b> do cliente deve ser informada. STOPPED.");
			}

			if ($sexo=="") {

				die("O sexo <b>sexo</b> do cliente deve ser informado. STOPPED.");
			}

			if ($estadoCivil==""){

				die("O estado civiel <b>estadoCivil</b> deve ser informado. STOPPED.");
			}
			if ($email=="") {

				die("O email do <b>email</b> deve ser informado. STOPPED.");
			}

			if ($ddd1=="") 	{

				die("O DDD <b>ddd1</b> deve ser informado. STOPPED.");
			}			

			if ($telefone1=="")	{

				die("O telefone <b>telefone1</b> deve ser informado.STOPPED.");
			}

			if ($tipo1=="")	{

				die("Escolher um <b>tipo1</b> válido de telefone. STOPPED.");
			}
			if ($ddd2=="")	{

				die("Escolher <b>ddd2</b> válido. STOPPED.");
			}
			if ($telefone2=="")	{

				die("O telefone deve ser <b>telefone2</b> válido. STOPPED.");
			}
			if ($tipo2=="")	{

				die("Escolha um tipo <b>tipo2</b> válido de telefone. STOPPED.");
			}
			if ($ddd3=="")	{

				die("Escolha um <b>ddd3</b> válido. STOPPED.");
			}
			if ($telefone3=="")	{

				die("Escolha um <b>telefone3</b> válido. STOPPED.");
			}
			if ($tipo3=="")	{

				die("Escolha um <b>tipo3</b> válido de telefone. STOPPED.");
			}
			if ($observacoes==""){

				die("Inclua <b>observacoes</b> válidas. STOPPED.");
			}
			
			// 3 Exibindo os dados vindos do formulário na pagina web:

			echo "nome do clente:	<b>$nomeCliente</b><br>";
			echo "data de nascimento:	<b>$nascimento</b><br>";
			echo "o sexo é:	<b>$sexo</b><br>";
			echo "estado civil:	<b>$estadoCivil</b><br>";
			echo "o email é:	<b>$email</b><hr>";
			echo "DDD1:		<b>$ddd1</b><hr>";
			echo "Telefone1:	<b>$telefone1</b><hr>";
			echo "tipo de telefone:	 <b>$tipo1</b><hr>";
			echo "DDD2:	<b>$ddd2</b><hr>";
			echo "Telefone2:	<b>$telefone2</b><hr>";
			echo "tipo de telefone2:	<b>$tipo2</b><hr>";
			echo "DDD3:	<b>$ddd3</b><hr>";
			echo "Telefone3:	<b>$telefone3</b><hr>";
			echo "tipo de telefone3:	<b>$tipo3</b><hr>";
			echo "Observações:	<b>$observacoes</b><hr>";
			
			// 4 Abrir o banco de dados SISTEMAS.		
			
			$conexao= mysqli_connect("localhost","root", "");
			
			// a- Confirmação da abertura do banco de dados	
			
			mysqli_select_db($conexao, "sistemas") or 
				die(
					"Erro ao abrir o banco de dados.: <br>" .
					mysqli_error($conexao)
				);
			
			// 5 Inserir registros na tabela CLIENTES.

			// a- Criar variáveis com o comando de inserção SQL.
			
			$sql="INSERT INTO clientes (nomeCliente,nascimento,	sexo,estadoCivil,email,	ddd1,telefone1,tipo1,
						      ddd2,telefone2, tipo2, ddd3, telefone3, tipo3, observacoes) 
				  VALUES ( '$nomeCliente', '$nascimento', '$sexo', '$estadoCivil', '$email', '$ddd1', '$telefone1',
						   '$tipo1', '$ddd2', '$telefone2', '$tipo2', '$ddd3', '$telefone3', '$tipo3','$observacoes')";
					
			// b- Enviar o comando de inclusão para o banco de dados.	
			
			mysqli_query($conexao, $sql) or 
				die(
					"Houve um problema na inserção dos dados em clientes:<br>" . 
						mysqli_error($conexao)
				);
			
			echo "Clientes <b>$nomeCliente</b> incluído com sucesso!";
			
		?>
		
		<br><br>

		Clique <a href="cadastro.html">aqui</a> para cadastrar outro cliente!<br>
	
	</body>
</html>