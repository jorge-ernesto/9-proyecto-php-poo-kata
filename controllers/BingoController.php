<?php

class BingoController{
	
	public function index()
	{
		//mensaje de error
	}

	public function view()
	{
		//DATA QUE PASAREMOS A LA VISTA
		$numeros_aleatorios = isset($_SESSION["numeros_aleatorios"]) ? $_SESSION["numeros_aleatorios"] : NULL; 
		$numero_aleatorio_actual = isset($_SESSION["numeros_aleatorio_actual"]) ? $_SESSION["numeros_aleatorio_actual"] : NULL; 	
		$data['numeros_aleatorios'] = $numeros_aleatorios;
		$data['numero_aleatorio_actual'] = $numero_aleatorio_actual;

		require_once 'views/bingo/view.php';
	}

	public function generate()
	{
		$action = isset($_POST['action']) ? $_POST['action'] : '';

		if ($action == "Generar numero") {
			//VALIDAMOS SI NO ES EL PRIMER NUMERO GENERADO  
			if (isset($_SESSION['numeros_aleatorios'])) {
				$x = 0;

				while ($x<1) {
					$num_aleatorio = rand(1,75);
					if (!in_array($num_aleatorio, $_SESSION['numeros_aleatorios'])) {               
						//ASIGNAMOS NUMEROS ALEATORIOS A VARIABLES DE SESSION
						// array_push($_SESSION['numeros_aleatorios'], $num_aleatorio);
						$_SESSION['numeros_aleatorios'][] = $num_aleatorio;
						$_SESSION["numeros_aleatorio_actual"] = $num_aleatorio;

						$x++;
					}
				}  
			} else { //ES EL PRIMER NUMERO GENERADO
				$num_aleatorio = rand(1,75);
				$_SESSION['numeros_aleatorios'][] = $num_aleatorio;
				$_SESSION["numeros_aleatorio_actual"] = $num_aleatorio;
			}
		} else {
			//ELIMINAMOS NUMEROS
			unset($_SESSION['numeros_aleatorios']);
			unset($_SESSION['numeros_aleatorio_actual']);			
		}
		
		//REDIRECCIONAMOS A LA VISTA VIEW
		header("Location:".base_url."bingo/view");
	}
	
}