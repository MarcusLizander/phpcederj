<?php
	function novaMatriz($mat){
		$mat2 = $mat;
		$numLinhas = count($mat);
		$numColunas = count($mat[0]);

		//Soma as Linhas
		for ($i=0; $i<$numLinhas; $i++){
			$somaLinha=0;
			for($j=0;$j<$numColunas;$j++){
				$somaLinha += $mat[$i][$j];
			}
			$mat2[$i][$numColunas]=$somaLinha;
		}

		//Soma as Colunas
		for ($j=0; $j<$numColunas+1; $j++){
			$somaColuna=0;
			for($i=0;$i<$numLinhas;$i++){
				$somaColuna += $mat2[$i][$j];
			}
			$mat2[$numLinhas][$j]=$somaColuna;
		}
		return $mat2;
	}


	//Testes
	$minhaMatriz = array(
		array(0,-2,-7,0),
		array(9,2,-6,2),
		array(-4,1,-4,1),
		array(-1,8,0,-2));

	$matriz2 = novaMatriz($minhaMatriz);
    echo "<pre>";
	print_r($matriz2);
	echo "</pre>";
?>