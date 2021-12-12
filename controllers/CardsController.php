<?php

class CardsController{

	public function index()
	{
		//mensaje de error
	}

	public function view()
	{
		//DATA QUE PASAREMOS A LA VISTA
		$bingo_cards = isset($_SESSION["bingo_cards"]) ? $_SESSION["bingo_cards"] : NULL;
		$data['bingo_cards'] = $bingo_cards;

		require_once 'views/cards/view.php';
	}

	public function generate()
	{
		$action = isset($_POST['action']) ? $_POST['action'] : '';

		if ($action == "Generar cards") {
			$valores = array();
			$x = 0;
			
			while ($x<75) {
				$num_aleatorio = rand(1,75);
				if (!in_array($num_aleatorio,$valores)) {
				array_push($valores,$num_aleatorio);
				$x++;
				}
			}   
			$_SESSION['bingo_cards'] = $valores;
		} else {
			//ELIMINAMOS NUMEROS
			unset($_SESSION['bingo_cards']);
		}
		
		//REDIRECCIONAMOS A LA VISTA VIEW
		header("Location:".base_url."cards/view");
	}
	
}