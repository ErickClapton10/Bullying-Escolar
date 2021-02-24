
<?php include 'template/menu.php';?>
		




		<div id='texto'> 

			<h2> Antes de fazer o relato Leia as seguintes orientações </h2> <br/> <br/>

			 Não é preciso se identificar, mas caso se sinta a vontade você poderá se identificar pelo relato, ou seja, seu nome é Opcional.
				 
			Esse relato será enviado para a conta do google ajudeme.bullying@gmail.com e você será respondido com os Procedimentos a serem seguidos. 
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			

			

			 
			<form action="formulario.php" method="post" >
							
							<div>
								<h3> Selecione sua Escola: (Opcional) </h3> <br/>
								<select name="Escola">
									<option value="indefinido" selected> Selecione sua Escola </option>		
									<option value="monsenhor"> Monsenhor </option>
									<option value="ifrn"> IFRN </option>
									<option value="caic "> Caic </option>
								<option value="cooepar"> Cooepar </option>
					</select>

					<br/>
					<br/>
						</div>

						<div>
								<h3> Selecione sua Serie: (Opcional) </h3> <br/>
								<select name="Serie">
								

								<option value="indefinido" selected> Selecione sua Serie </option>
								<option value="primeiroano"> 1° ano </option>
								<option value="segundoano"> 2° ano </option>
								<option value="terceiroano"> 3° ano </option>
								<option value="quartoano"> 4° ano </option>

					</select>

					<br/>
					<br/>
						</div>

						<div>
							 <br/>
							 <label for = $var3> Relato: <br/> </label> <br/> 
							 <textarea class="formulario_textarea" name="Relato" placeholder="Deixe seu relato" required> </textarea>
								
						</div>
							 <div>
								
									</br>
											<button name="BotaoEnviar" type="submit" class="formulario_button">Enviar</button>  
							</div>     
				
					</form> 

					
						
						

							
						

			</div>  

			</div>
		
<?php
	
	if (isset($_POST["BotaoEnviar"])) {
		
	
	$mailDestino = "baashir100@gmail.com";
	$relato = $_POST["Relato"];
	
	$serie = $_POST["Serie"];
	$turma = "";

	if($serie == "primeiroano"){
		$serie="1° Ano";
		$turma="primeiro ano";
	}else if($serie == "segundoano"){
		$serie="2° Ano";
		$turma="segundo ano";
	}else if ($serie == "terceiroano"){
		$serie="3° Ano";
		$turma="terceiro ano";
	}else if ($serie == "indefinido") {
		$serie="Anônimo";
		$turma="anônimo";
	}else{
		$serie="4° Ano";
		$turma="quarto ano";
	}


	$escola = $_POST["Escola"];

	if($escola == "indefinido"){
		$escola="Anônimo";
	}else if($escola == "monsenhor"){
		$escola="Monsenhor";
	}else if ($escola == "ifrn"){
		$escola="IFRN";
	}else if ($escola == "caic") {
		$escola="Caic";
	}else if($escola == "cooepar"){
		$escola="Cooepar";
	}


	$mensagem = "<b> Escola: </b> <br>".$escola."<br> <b> Série: </b> <br>". $serie. "<br> <b> Relato </b> <br>".$relato;
	//echo $mensagem;
	//echo $mailDestino;
	include 'EnviarEmail.php';
	//include 'controle_bd.php';
	//inserirDados();
	//buscarDados();
}
	

?>


<?php include 'template/rodape.php';?>
		 