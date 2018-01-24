<?php
	function numeroPI($k){
		$pontosDentro=0;

		for ($i = 0; $i<$k; $i++) {
			//Gera a Coordenada Aleatória para X, de 0 a 1
    		$x = mt_rand(0, 100) / 100; 
			//Gera a Coordenada Aleatória para Y, de 0 a 1
    		$y = mt_rand(0, 100) / 100;
    		//Calcula o raio (distância até a origem) do ponto (x,y)
    		$raio = sqrt($x*$x + $y*$y);
    		if ($raio <= 1) {
    			//Ponto dentro do círculo
        		$pontosDentro++;
    		}
  		}			
		$valorPI = 4 * $pontosDentro / $k;
		return $valorPI;
	}


	//Testes
	$numPontos = 1000;
	$vlrPI = numeroPI($numPontos);
  	echo "Valor estimado de PI para " . $numPontos . " pontos: " . number_format($vlrPI,2) ;

?>