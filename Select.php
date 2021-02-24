<?php
	$escola = "IFNR";
	$relato = "Teste relato";
	$serie = "3 ano";
	$mensagem = "<b> Escola: </b> <br/>".$escola."</br> <b> Série: </b> <br/>". $serie. "</br> <b> Relato </b> <br/>".$relato;
	echo $mensagem;
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="Select.php" method="post" >
        <div>
           	<h3> Selecione sua Escola: </h3> <br/>
            <select name="select">
            			
				<option value="Monselhor"> Monselhor </option>
  				<option value="IFRN"> IFRN </option>
  				<option value="Caic "> Caic </option>
  				<option value="Cooepar"> Cooepar </option>
			</select>

			<br/>
			<br/>
        </div>

        <div>
            </br>
            <button type="submit" class="select_button">Enviar</button>  
       	</div>   
    </form> 


</body>
</html>

</br>
</br>
</br>
<?php
	
	$selectEscola= $_POST["select"];
	echo $selectEscola;


?>

