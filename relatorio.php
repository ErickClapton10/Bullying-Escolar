<?php include 'template/menu.php';
include 'controle_bd.php';
	

	$monsenhor_primeiro = buscarDadosEscola("Monsenhor", "primeiro ano");
	$monsenhor_segundo = buscarDadosEscola("Monsenhor", "segunda ano");
	$monsenhor_terceiro = buscarDadosEscola("Monsenhor", "terceiro ano");
	$monsenhor_quarto = buscarDadosEscola("Monsenhor", "quarto ano");

	$monsenhor_total = $monsenhor_primeiro + $monsenhor_segundo + $monsenhor_terceiro + $monsenhor_quarto;

	$caic_primeiro = buscarDadosEscola("Caic", "primeiro ano");
	$caic_segundo = buscarDadosEscola("Caic", "segundo ano");
	$caic_terceiro = buscarDadosEscola("Caic", "terceiro ano");
	$caic_quarto = buscarDadosEscola("Caic", "quarto ano");

	$caic_total = $caic_primeiro + $caic_segundo + $caic_terceiro + $caic_quarto;



	$cooepar_primeiro = buscarDadosEscola("Cooepar", "primeiro ano");
	$cooepar_segundo = buscarDadosEscola("Cooepar", "segundo ano");
	$cooepar_terceiro = buscarDadosEscola("Cooepar", "terceiro ano");
	$cooepar_quarto = buscarDadosEscola("Cooepar", "quarto ano");

	$cooepar_total = $cooepar_primeiro + $cooepar_segundo + $cooepar_terceiro + $cooepar_quarto;


	$ifrn_primeiro = buscarDadosEscola("IFRN", "primeiro ano");
	$ifrn_segundo = buscarDadosEscola("IFRN", "segundo ano");
	$ifrn_terceiro = buscarDadosEscola("IFRN", "terceiro ano");
	$ifrn_quarto = buscarDadosEscola("IFRN", "quarto ano");

	$ifrn_total = $ifrn_primeiro + $ifrn_segundo + $ifrn_terceiro + $ifrn_quarto;


	$total_relato = $ifrn_total + $monsenhor_total + $caic_total + $cooepar_total ; 

	$porcentagem_if = number_format((($ifrn_total * 100) / $total_relato), 2, '.', '');
	$porcentagem_monsenhor = number_format((($monsenhor_total * 100) / $total_relato), 2, '.', '');
	$porcentagem_caic = number_format((($caic_total * 100) / $total_relato), 2, '.', '');
	$porcentagem_cooepar = number_format((($cooepar_total * 100) / $total_relato), 2, '.', '');

?>

	


<div>
	<table  cellspacing="10" cellpadding="10" border="1">
    	<tr>
    		<td> &nbsp; </td>
        	<td> 1° Ano</td>
        	<td> 2° Ano</td>
        	<td> 3° Ano </td>
        	<td> 4° Ano </td>
        	<td> Total </td>
        	<td> Porcentagem </td>
    	</tr>
    	
    	<tr>
        	<th> Monsenhor </th> 
        		<td  align="center"> <?php echo $monsenhor_primeiro ?> </td>
        		<td  align="center"> <?php echo $monsenhor_segundo ?> </td>
        		<td  align="center"> <?php echo $monsenhor_terceiro ?> </td>
        		<td  align="center"> <?php echo $monsenhor_quarto ?> </td>
        		<td  align="center"> <?php echo $monsenhor_total ?> </td>
        		<td  align="center"> <?php echo $porcentagem_monsenhor." %" ?> </td>

    	</tr>

    	<tr> 
    		<th> Caic </th> 
    			<td  align="center"> <?php echo $caic_primeiro ?> </td>
        		<td  align="center"> <?php echo $caic_segundo ?> </td>
        		<td  align="center"> <?php echo $caic_terceiro ?> </td>
        		<td  align="center"> <?php echo $caic_quarto ?> </td>
        		<td  align="center"> <?php echo $caic_total ?> </td>
        		<td  align="center"> <?php echo $porcentagem_caic." %" ?> </td>

    	</tr>

    	<tr>
        	<th> Cooepar </th>
        		<td  align="center"> <?php echo $cooepar_primeiro ?> </td>
        		<td  align="center"> <?php echo $cooepar_segundo ?> </td>
        		<td  align="center"> <?php echo $cooepar_terceiro ?> </td>
        		<td  align="center"> <?php echo $cooepar_quarto ?> </td>
        		<td  align="center"> <?php echo $cooepar_total ?> </td>
        		<td  align="center"> <?php echo $porcentagem_cooepar." %" ?> </td>
    	</tr>

    	<tr>
        	<th> IFRN </th>
        		<td  align="center"> <?php echo $ifrn_primeiro ?> </td>
        		<td  align="center"> <?php echo $ifrn_segundo ?> </td>
        		<td  align="center"> <?php echo $ifrn_terceiro ?> </td>
        		<td  align="center"> <?php echo $ifrn_quarto ?> </td>
        		<td  align="center"> <?php echo $ifrn_total ?> </td>
        		<td  align="center"> <?php echo $porcentagem_if." %" ?> </td>

        </tr>
    	
        	
        		

   	 	
	</table>
	


</div>



<?php include 'template/rodape.php';?>