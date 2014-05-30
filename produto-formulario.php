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
        <h1>Formulário de Cadastro Teste</h1>
        <form id="cadform" name="cadform" method="get" action="adiciona-produtos.php" onsubmit="return validaCampo();">

            Nome: <input type="text" name="nome" id="nome"/><br/>
                  
            Preço:<input type="number" name="preco" /><br/>

            <input type="submit" name="enviar" id="enviar" value="Cadastrar"   />
        </form>
</body>
</html>
<?php include 'rodape.php';?>
       