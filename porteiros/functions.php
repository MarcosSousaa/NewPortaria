<?php 
require_once ('../config.php');
require_once DBAPI;


$porteiro = null;
$porteiros = null;


/*
** Listagem de porteiros 
*/

function index(){
	global $porteiros;
	$porteiros = lista_all('porteiros');
}

/*
** Visualização de um porteiro
*/
function view($id = null){
	global $porteiro;
	$porteiro = lista('porteiros',$id);
}

/*
** Atualizar / Editar porteiro
*/ 
function edit(){
	global $porteiro;
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		if(isset($_POST['porteiro'])){
			$porteiro = $_POST['porteiro'];			
			update('porteiros',$id,$porteiro);
			header('location: index.php');
		} else {
			global $porteiro;
			$porteiro = lista('porteiros',$id);
		}
	} else {
		header('location: index.php');
	}
}

/**
 * Cadastro de porteiro
 */
function add(){
	if(!empty($_POST['porteiro'])){
		$porteiro = $_POST['porteiro'];		
		save('porteiros', $porteiro);
		header('location: index.php');
	}
}

/**
* Exclusão de um Porteiro
*/
function delete($id = null){
	global $porteiro;
	print_r($id);
	$porteiro = remove('porteiros',$id);

	header('location: index.php');
}