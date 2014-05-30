<?php

         
        function insereProduto($nome,$preco,$conexao){
        	$query = "insert into produtos(nome,preco) values('{$nome}',{$preco})"; 
        	return mysqli_query ($conexao,$query);
        }