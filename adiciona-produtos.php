<?php 
include 'cabecalho.php';
include 'conecta.php';
include 'funcaoBd.php';

		$nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $descricao = $_GET["descricao"];
        
              
        if (insereProduto($conexao,$nome,$preco,$descricao)) {?>
        		<p class = "text-success">
        			Produto <?=$nome;?>, com o valor de <?=$preco;?>, foram adicionado com sucesso!
        		</p>	
        	<?php } else {?> 
        	   	<p class = "text-danger">
        			<p class="text-danger">Produto <?= $nome;?>, não foi adicionado</p>
       			 </p>	   
     		<?php 
         }
     	 ?>    
     	    
       
<?php include 'rodape.php';?>       