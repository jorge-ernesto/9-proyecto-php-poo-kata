<?php

class Utils{
		
	public static function showStatus($status){
		$value = 'Pendiente';
		
		if($status == 'confirm'){
			$value = 'Pendiente';
		}elseif($status == 'preparation'){
			$value = 'En preparación';
		}elseif($status == 'ready'){
			$value = 'Preparado para enviar';
		}elseif($status = 'sended'){
			$value = 'Enviado';
		}
		
		return $value;
	}

	public static function showStatusBingo($status){
		$value = 'Pendiente';
		
		if($status == 'complete'){
			$value = 'Ya llegaste al limite maximo, debes limpiar numeros para continuar';
		}elseif($status == 'continue'){
			$value = 'Aun falta para llegar a los 75 :)';
		}
		
		return $value;
	}
	
}
