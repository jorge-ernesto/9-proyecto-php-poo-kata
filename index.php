<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

function show_error(){
	$error = new errorController();
	$error->index();
}

// error_log(json_encode($_GET)); //Debug

if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
	// error_log($nombre_controlador); //Debug

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
	// error_log($nombre_controlador); //Debug
	
}else{
	show_error();
	exit();
}

if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
		// error_log($action); //Debug
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
		// error_log($action_default); //Debug
	}else{
		show_error();
	}
}else{
	show_error();
}

require_once 'views/layout/footer.php';


