
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Cardapio</title>
			<link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
			<link rel="stylesheet" type="text/css" href="css/CSSpaginaCardapio.css">
	</head>
	<body>
		
		<div id="div1" align="center">
			<img id="imagens" src="imagens/img.sejaochef.png" align="center">
		</div>
		<!--menu da página inicial -->
		<div id="menu">
			<ul>
			<li> <a href="paginaInicial.html">Inicial</a> </li>
			<li> <a href="paginaCardapio.html">Cardápio</a> </li>
			<li> <a href="paginaMontarpedido.html">Montagem</a> </li>
			<li> <a href="paginaMeusPedidos.html">Meus Pedidos</a> </li>
			<li> <a href="paginaCadastro.html">Cadastro</a> </li>
			<li> <a><?php echo $_GET['nome']?></a></li>
			</ul>
		</div>
		
   		<br>
   		<div id="listasanduiche" align =left>
	   		<table>
	   			<tr>	
		   			<td><input type="checkbox" value="html"/><td>	

		   			<td id="imagemcalabresa"><img id="imagem" src="imagens/img.comer.jpg" width="200" height="100"></td>

		   			<td id="testando">

		   				<b id="textocalabresa">X-CALABRESA</b><br><label id="ingd">Ingredientes: Pão bola, hamburguer, alface, calabresa, queijo e presunto</label><br><br>
			   			<input id="radio" type="radio">Adicione ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
			   			<input id="radio" type="radio">Retire ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
		   			</td>

		   			<td id="testando"><label><b> R$15 reais</b></label><br><input class="btn btn-yellow" type="button" value="Comprar"><br></td>
	   			</tr>

	   			<tr>	
		   			<td><input type="checkbox" value="html"/><td>	

		   			<td id="imagemcalabresa"><img id="imagem" src="imagens/img.comer.jpg" width="200" height="100"></td>

		   			<td id="testando">

		   				<b id="textocalabresa">X-BACON</b><br><label id="ingd">Ingredientes:Pão bola, hamburguer, alface, bacon, queijo e presunto</label><br><br>
			   			<input id="radio" type="radio">Adicione ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
			   			<input id="radio" type="radio">Retire ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
		   			</td>

		   			<td id="testando"><label><b> R$15 reais</b></label><br><input class="btn btn-yellow" type="button" value="Comprar"><br></td>

	   			</tr>

	   			<tr>	
		   			<td><input type="checkbox" value="html"/><td>	

		   			<td id="imagemcalabresa"><img id="imagem" src="imagens/img.comer.jpg" width="200" height="100"></td>

		   			<td id="testando">

		   				<b id="textocalabresa">X-FRANGO</b><br><label id="ingd">Ingredientes:Pão bola, hamburguer, alface, frango, queijo e presunto</label><br><br>
			   			<input id="radio" type="radio">Adicione ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
			   			<input id="radio" type="radio">Retire ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
		   			</td>

		   			<td id="testando"><label><b> R$15 reais</b></label><br><input class="btn btn-yellow" type="button" value="Comprar"><br></td>
	   			</tr>

	   			<tr>	
		   			<td><input type="checkbox" value="html"/><td>	

		   			<td id="imagemcalabresa"><img id="imagem" src="imagens/img.comer.jpg" width="200" height="100"></td>

		   			<td id="testando">

		   				<b id="textocalabresa">X-CARNE DE SOL</b><br><label id="ingd">Ingredientes:Pão bola, hamburguer, alface, carne de sol, queijo e presunto</label><br><br>
			   			<input id="radio" type="radio">Adicione ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
			   			<input id="radio" type="radio">Retire ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
		   			</td>

		   			<td id="testando"><label><b> R$15 reais</b></label><br><input class="btn btn-yellow" type="button" value="Comprar"><br></td>
	   			</tr>

	   			<tr>	
		   			<td><input type="checkbox" value="html"/><td>	

		   			<td id="imagemcalabresa"><img id="imagem" src="imagens/img.comer.jpg" width="200" height="100"></td>

		   			<td id="testando">

		   				<b id="textocalabresa">X-TANAJURA (Sazonal)</b><br><label id="ingd">Ingredientes:Pão bola, hamburguer, alface, tanajura, queijo e presunto</label><br><br>
			   			<input id="radio" type="radio">Adicione ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
			   			<input id="radio" type="radio">Retire ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
		   			</td>

		   			<td id="testando"><label><b> R$15 reais</b></label><br><input class="btn btn-yellow" type="button" value="Comprar"><br></td>
	   			</tr>

	   			<tr>	
		   			<td><input type="checkbox" value="html"/><td>	

		   			<td id="imagemcalabresa"><img id="imagem" src="imagens/img.comer.jpg" width="200" height="100"></td>

		   			<td id="testando">

		   				<b id="textocalabresa">PASSAPORTE DE CARNE</b><br><label id="ingd">Ingredientes:Pão seda, salsicha, tomate, ervilha, carne moída, milho, catchup, maionese</label><br><br>
			   			<input id="radio" type="radio">Adicione ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
			   			<input id="radio" type="radio">Retire ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
		   			</td>

		   			<td id="testando"><label><b> R$15 reais</b></label><br><input class="btn btn-yellow" type="button" value="Comprar"><br></td>
	   			</tr>

	   			<tr>	
		   			<td><input type="checkbox" value="html"/><td>	

		   			<td id="imagemcalabresa"><img id="imagem" src="imagens/img.comer.jpg" width="200" height="100"></td>

		   			<td id="testando">

		   				<b id="textocalabresa">PASSAPORTE DE FRANGO</b><br><label id="ingd">Ingredientes:Pão seda, salsicha, tomate, ervilha, frango desfiado, milho, catchup, maionese</label><br><br>
			   			<input id="radio" type="radio">Adicione ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
			   			<input id="radio" type="radio">Retire ingredientes <input id="dist" type="text" size="40" maxlength="50"><br>
		   			</td>

		   			<td id="testando"><label><b> R$15 reais</b></label><br><input class="btn btn-yellow" type="button" value="Comprar"><br></td>
	   			</tr>

	   		</table>
	   	</div>	

	   	<div id="escolhidoscardapio" align="center">
			<table  width=200 height=50 border="1">
				<caption><b>Ingredientes Escolhidos</b></caption><br>

				<tr><td>Sanduiches</td> <td width=10 height=10>Ingredientes</td> </tr>

				<tr>
	  				<td><input type="text" name="tipopao"></td>
	  				<td width=10 height=10><input type="text"></td>
	 			</tr>

	 			<tr>
	 				<td><input type="text" name="tiporecheio"></td>
	 				<td width=10 height=10><input type="text"></td>
	 			</tr>

	 			<tr>
	 				<td><input type="text" name="tipomolho"></td>
	 				<td width=10 height=10><input type="text"></td>
	 			</tr>

	 			<tr>
	 				<td><input type="text" name="bebida"></td>
	 				<td width=10 height=10><input type="text"></td>
	 			</tr>
				
				<table align="center"><br>

	   			<tr>
			   		<td align="center"><input class="btn btn-yellow" type="button" value="Limpar"></td>
			   		<td><input class="btn btn-green" type="button" onclick="window.location.href  = 'paginaPagamento.html'" value="Finalizar a compra"></td>
			   	</tr>

			   </table>

	   		</table>

		</div>

	</body>
</html>
