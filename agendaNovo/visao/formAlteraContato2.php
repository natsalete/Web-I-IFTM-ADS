<HTML>

	<HEAD>
		<TITLE> Alterar Contato </TITLE>
		<META charset="UFT-8" />
	</HEAD>
	
	<BODY>
	
		<H1> Alterar Contato </H1>
		
		<FORM action="contato.php?fun=cadastrar" method="POST" enctype="multipart/form-data">
		<!-- POST -> envio de informações escondidas -->
		
			<INPUT type="hidden" name="id" value="<?php echo $c->getId(); ?>" />
	
			<LABEL for="nome"> Nome: </LABEL> 
			<INPUT type="text" name="nome" id="nome" value="<?php echo $c->getNome(); ?>"/> <br /><br />
			
			<LABEL for="email"> Email: </LABEL> 
			<INPUT type="text" name="email" id="email" value="<?php echo $c->getEmail(); ?>"/> <br /><br />
			
			<LABEL for="telefone"> Telefone: </LABEL> 
			<INPUT type="text" name="telefone" id="telefone" value="<?php echo $c->getTelefone(); ?>"/> <br /><br />
			
			<INPUT type="submit" name="enviar" value="Enviar" />
			
		</FORM>
	
	</BODY>

</HTML>