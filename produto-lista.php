<?php 
include ("cabecalho.php");
include ("conecta.php");
include ("funcaoBd.php");
?>


<table class="table table-striped table-bordered">
	<?php 
		$produtos = listaProduto($conexao);	
		foreach ($produtos as $produto) :
	?>
	<tr>
		<td><?=$produto['nome']?></td>	
		<td><?=$produto['preco']?></td>
		<td><?=$produto['descricao']?></td>
		
		</tr>
		
	<?php 
	endforeach;
	?>
</table>
<?php include ("rodape.php");?>

	