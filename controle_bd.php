<?php

function abrirConexao(){
$link=mysqli_connect("127.0.0.1","root","","combatebullying");
  if(mysqli_connect_errno()){
    $texto= "Erro ao conectar com o banco";
    alertAviso($texto);
    return;
  }
  return $link;
}



function fecharConexao($link){
  mysqli_close($link);
}




function buscarDadosEscola($escola, $turma){
	
$link=abrirConexao();
    $sql = "SELECT COUNT(idrelatorio) FROM relatorio WHERE escola = '$escola' and turma = '$turma';";
    $resultado = mysqli_query($link, $sql);

		if (!$resultado) {
			$texto="Falha em buscar os dados";
			alertAviso($texto);
			return;
		}else{
			
			$row = mysqli_fetch_row($resultado);
			return $row[0];

			/*$cont=0;
			
			while($fetch = mysqli_fetch_row($resultado)){
       			// print_r(array_values ($fetch));
    			$cont++;

    		}
			*/
			//for ($i=0; $i>=$row)
			//echo $row;
			//echo count ($row);
			//$row2 = array(1,2,3,4,1,2,2);
			//print_r(array_values ($row));

    		

			//echo $row;
			//echo sizeof($row);
		}

	fecharConexao($link);
}




function inserirDados($escola, $turma, $data){

	
$link=abrirConexao();
    $sql = "INSERT INTO relatorio (escola, turma, data)
VALUES ('$escola', '$turma', '$data');";
    $resultado = mysqli_query($link, $sql);


	fecharConexao($link);
}




?>
