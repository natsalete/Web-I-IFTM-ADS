<HTML>
	<HEAD>
		<TITLE> Alterar Contato </TITLE>
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		
		<H1> Alterar Contato </H1>
		
		<FORM action="contato.php?fun=alterar" method="POST">
			
			<INPUT type="hidden" name="id" 
			<?php echo "value='" . $cont->getId() . "'"; ?> />
			
			<LABEL for="nome"> Nome: </LABEL> 
			<INPUT type="text" id="nome" name="nome" 
			<?php echo "value='" . $cont->getNome() . "'"; ?> /> <br />
			
			<LABEL for="email"> Email: </LABEL> 
			<INPUT type="text" id="email" name="email" 
			<?php echo "value='" . $cont->getEmail() . "'"; ?>/> <br />
			
			<LABEL for="tel"> Telefone: </LABEL> 
			<INPUT type="text" id="tel" name="telefone" 
			<?php echo "value='" . $cont->getTelefone() . "'"; ?>/> <br />
			
			<INPUT type="submit" name="enviar" value="enviar" />
			
			<!-- $_POST["enviar"]="enviar" -->
			
		</FORM>
		
	</BODY>

</HTML>