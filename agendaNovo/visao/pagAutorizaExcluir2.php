<HTML>

	<HEAD>
		<TITLE> Excluir Contato </TITLE>
		<META charset="UFT-8" />
	</HEAD>
	
	<BODY>
	
		<H1> Você realmente deseja excluir o contato <?php echo $c->getNome(); ?> </H1>
		
		<A href="contato.php?fun=excluir&conf=sim&id=<?php echo $c->getId(); ?>"> SIM </A>
		
		<A href="contato.php?fun=listar">NÃO</A>	
			
		</FORM>
	
	</BODY>

</HTML>