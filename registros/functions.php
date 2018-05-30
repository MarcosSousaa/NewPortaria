<?php 
require_once ('../config.php');
require_once DBAPI;


$chaves = null;
$recebimento_servico = null;
$porteiro = null;
$veiculos = null;


/*
** Listagem de veiculos 
*/

function index(){
	global $veiculos;
	$veiculos = lista_all('veiculos');
}

/*
** Visualização de um veiculo
*/
function view($id = null){
	global $veiculo;
	$veiculo = lista('veiculos',$id);
}

/*
** Atualizar / Editar veiculo
*/ 
function edit(){
	global $veiculo;
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		if(isset($_POST['veiculo'])){
			$veiculo = $_POST['veiculo'];			
			update('veiculos',$id,$veiculo);
			header('location: index.php');
		} else {
			global $veiculo;
			$veiculo = lista('veiculos',$id);
		}
	} else {
		header('location: index.php');
	}
}

/**
 * Cadastro de veiculo
 */
function add(){
	if(!empty($_POST['veiculo'])){
		$veiculo = $_POST['veiculo'];		
		save('veiculos', $veiculo);
		header('location: index.php');
	}
}

/**
* Exclusão de um veiculo
*/
function delete($id = null){
	global $veiculo;
	print_r($id);
	$veiculo = remove('veiculos',$id);

	header('location: index.php');
}