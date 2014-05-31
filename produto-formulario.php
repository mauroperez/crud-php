<?php include 'cabecalho.php';?>
<html>

<head>
<script type="text/javascript">
function validaCampo() {
	if(document.cadform.nome.value=="" || document.cadform.preco.value=="") {
		alert("Favor verificar os campos obrigatórios!");
		return false;
	}
	else 
		return true;
}
</script>
</head>

<body>
<h1>Formulário de Cadastro</h1>
 <form id="cadform" name="cadform" method="get" action="adiciona-produtos.php" onsubmit="return validaCampo();">
	<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome" id="nome"></td>
		</tr>
		<tr>
			<td>Preco:</td>
			<td><input class="form-control" type="number" name="preco"></td>
		</tr>
		<tr>
			<td>Descricao</td>
			<td><textarea class="form-control" name="descricao"></textarea></td>
		</tr>
          <tr>
			<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
		</tr>
	</table>
 </form>
</body>
</html>
<?php include 'rodape.php';?>
       