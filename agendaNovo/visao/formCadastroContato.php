		<H1> Cadastro Contato </H1>
		
		<FORM action="contato.php?fun=cadastrar" method="POST" 
		enctype="multipart/form-data">
			
			<LABEL for="nome"> Nome: </LABEL> 
			<INPUT type="text" id="nome" name="nome" /> <br />
			
			<LABEL for="email"> Email: </LABEL> 
			<INPUT type="text" id="email" name="email" /> <br />
			
			<LABEL for="tel"> Telefone: </LABEL> 
			<INPUT type="text" id="tel" name="telefone" /> <br />
			
			<INPUT type="submit" name="enviar" value="enviar" />
			<!-- variável enviar (name) recebe o valor "enviar" -->
					
		</FORM>

