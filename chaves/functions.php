<?php 
require_once ('../config.php');
require_once DBAPI;


$chave = null;
$chaves = null;


/*
** Listagem de chaves 
*/

function index(){
	global $chaves;
	$chaves = lista_all('chaves');
}

/*
** Visualização de um chave
*/
function view($id = null){
	global $chave;
	$chave = lista('chaves',$id);
}

/*
** Atualizar / Editar chave
*/ 
function edit(){
	global $chave;
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		if(isset($_POST['chave'])){
			$chave = $_POST['chave'];			
			update('chaves',$id,$chave);
			header('location: index.php');
		} else {
			global $chave;
			$chave = lista('chaves',$id);
		}
	} else {
		header('location: index.php');
	}
}

/**
 * Cadastro de chave
 */
function add(){
	if(!empty($_POST['chave'])){
		$chave = $_POST['chave'];		
		save('chaves', $chave);
		header('location: index.php');
	}
}

/**
* Exclusão de um chave
*/
function delete($id = null){
	global $chave;
	print_r($id);
	$chave = remove('chaves',$id);

	header('location: index.php');
}