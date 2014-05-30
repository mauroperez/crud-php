<?php 
include 'cabecalho.php';
include 'funcaoBd.php';

         
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $conexao = mysqli_connect('localhost','root','root','crud'); 
              
        if (insereProduto($nome,$preco,$conexao)) {?>
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