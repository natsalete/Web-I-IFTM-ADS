<HTML>
	<HEAD>
		<TITLE> Autorização de Exclusão </TITLE>
	</HEAD>
	<BODY>
		
		<H1> Confirmar exclusão de <?php echo $cont->getNome(); ?> </h1>
		
		<H2><A href="contato.php?fun=excluir&conf=sim&id=<?php echo $cont->getId();?>"> Sim </H2> 
		
		</H2> <A href="contato.php?fun=listar">Não</H2>
		
	</BODY>
</HTML>