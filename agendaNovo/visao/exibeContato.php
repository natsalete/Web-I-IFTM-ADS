<HTML>

	<HEAD>
		<TITLE> Contato <?php echo $cont->getNome(); ?> </TITLE>
	</HEAD>

	<BODY>
		
		<H1> Contato <?php echo $cont->getNome(); ?> </H1>
		<UL>
			<LI>Nome: <?php echo $cont->getNome(); ?></LI>
			<LI>Telefone: <?php echo $cont->getTelefone(); ?></LI>
			<LI>E-mail: <?php echo $cont->getEmail(); ?></LI>
			<LI> <IMG src=<?php echo $cont->getFoto(); ?> width="100" /> </LI>
		</UL>
		
		<A href="contato.php?fun=listar"> Voltar </A>
		
	</BODY>
	
</HTML>