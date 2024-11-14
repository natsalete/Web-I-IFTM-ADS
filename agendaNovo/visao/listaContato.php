<HTML>
	<HEAD>
		<TITLE> Listagem de Contatos </TITLE>
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		<?php
			if(isset($status)){ echo "<H2>".$status."</H2>";}
			//Se $status está preenchida, imprimir ela
		?>
		<A href="contato.php?fun=cadastrar" > Cadastrar </A>
		<br /><br />
			
		<TABLE border="1px">
			<TR> 
				<TH> ID </TH>
				<TH> Nome </TH>
				<TH> Email </TH>
				<TH> Telefone </TH>	
				<TH> <img src="visao/img/update.png" width='30px' /> </TH>
				<TH> <img src="visao/img/delete.png" width='30px' /> </TH>
			</TR>
			<!-- Primeira linha da tabela com o cabeçalho -->
			
			    <?php
				foreach($lista as $c){	
					echo "<TR>"; 	

					echo "<TD>" . $c->getId() . "</TD>";
					
					echo "<TD><A href='contato.php?fun=exibir&id=". $c->getId() . 
					      "'>" . $c->getNome() . "</A></TD>";
					
					echo "<TD>" . $c->getEmail() . "</TD>";
					
					echo "<TD>" . $c->getTelefone() . "</TD>";		
					
					echo "<TD><A href=contato.php?fun=alterar&id=" . 
					      $c->getId() . "><img src='visao/img/update.png' width='30px'/> 
						  </A></TD>"; 

					echo "<TD><A href=contato.php?fun=excluir&id=" . 
					      $c->getId() . "><img src='visao/img/delete.png' width='30px' /> 
						  </A></TD>";	
					
					echo "</TR>";	
				}	
			?>	
		</TABLE>
	</BODY>
</HTML>
