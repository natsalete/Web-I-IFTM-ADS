<HTML>

	<HEAD>
		<TITLE> Cadastrar Contato </TITLE>
		<META charset="UFT-8" />
	</HEAD>
	
	<BODY>
	
		<H1> Cadastrar Contato </H1>
		
		<FORM action="contato.php?fun=cadastrar" method="POST" enctype="multipart/form-data">
		<!-- POST -> envio de informações escondidas -->
	
			<LABEL for="nome"> Nome: </LABEL> 
			<INPUT type="text" name="nome" id="nome" value="<?php echo $c->getNome(); ?>"/> <br /><br />
			
			<LABEL for="email"> Email: </LABEL> 
			<INPUT type="text" name="email" id="email"/> <br /><br />
			
			<LABEL for="telefone"> Telefone: </LABEL> 
			<INPUT type="text" name="telefone" id="telefone"/> <br /><br />
			
			<INPUT type="submit" name="enviar" value="Enviar" />
			
		</FORM>
	
	</BODY>

</HTML>