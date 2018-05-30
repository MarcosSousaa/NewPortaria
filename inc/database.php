<?php 
/** 
* Abrir Conexão com o BD
*/

function openDatabase(){
	try{
		$conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
		return $conn;
	}catch(Exception $e){
		echo $e->getMessage();
		return null;
	}
}

/**
* Fechar Conexão com o BD
*/
function closeDatabase(){
	try{
		$conn = null;
	} catch(Exception $e){
		echo $e->getMessage();
	}
 
}
/**
* Lista registro especifico de uma tabela
*/
function lista($tabela = null,$id = null){
	$database = openDatabase();
	$resultado = null;
	try {
		if($id){
			$sql = "SELECT * FROM ".$tabela. " WHERE ukey =".$id;
			$result = $database->query($sql);
			if($result->rowCount() > 0){
				$resultado = $result->fetch(PDO::FETCH_ASSOC);
			} 
		}
		elseif ($campos && $join1 && $join2 &$dt1 && $dt2) {
			$sql = "SELECT * FROM". $tabela. " INNER JOIN ".$join1. "ON ";
		}
		else {
			$sql = "SELECT * FROM ".$tabela;
			$result = $database->query($sql);
			if($result->rowCount() > 0){
				$resultado = $result->fetchAll();
			}
		}
	}catch(Exception $e){
		$_SESSION['message'] = $e->getMessage();
		$_SESSION['type'] = 'danger';
	}
	closeDatabase($database);
	return $resultado;
}




/**
* Listar todos os registro de uma tabela
*/
function lista_all($tabela){
	return lista($tabela);
}

/** 
* Update especifico de uma tabela 
*/
function update($tabela = null, $id = 0, $dados = null){
	$database = openDatabase();

	$campos = null;
	foreach($dados as $key => $valor){
		$campos.= trim($key,"'")."='$valor',";
	}

	// remove a ultima virgula
	$campos = rtrim($campos, ',');	
	$sql = "UPDATE ".$tabela;
	$sql .= " SET $campos";
	$sql .= " WHERE ukey=". $id . ";";
	
	
	try{
		$database->query($sql);

		$_SESSION['message'] = 'Registro atualizado com sucesso';
		$_SESSION['type'] = 'success';
	} catch(Exception $e){
		$_SESSION['message'] = 'Não foi possivel realizar a operação';
		$_SESSION['type'] = 'danger';
	}

	closeDatabase($database);
}

/*
** Inserir registro em uma tabela
*/
function save($tabela = null, $dados = null){
	$database = openDatabase();
	$colunas = null;
	$valores = null;

	foreach($dados as $key => $valor){
		$colunas.= trim($key, "'") . ",";
		$valores .= "'$valor',";
	}
	// removendo as ultimas virgulas
	$colunas = rtrim($colunas, ',');
	$valores = rtrim($valores, ',');

	$sql = "INSERT INTO ". $tabela. "($colunas)". " VALUES ". "($valores);";


	try {
		$database->query($sql);

		$_SESSION['message'] = 'Registro Cadastrado com sucesso.';
		$_SESSION['type'] = 'sucess';
	} catch(Exception $e){
		$_SESSION['message'] = 'Não foi possivel realizar a operação.';
		$_SESSION['type'] = 'danger';
	}

	closeDatabase($database);
	
}

/**
* Remove uma linha de uma tabela pelo ID do registro
*/
function remove($table = null, $id = null){

	$database = openDatabase();

	try{
		if($id){
			$sql = "DELETE FROM ". $table . " WHERE ukey=". $id;
			$result = $database->query($sql);

			if($result = $database->query($sql)){
				$_SESSION['message'] = "Registro Removido com Sucesso";
				$_SESSION['type'] = 'success';
			}
		}
	} catch(Exception $e){
		$_SESSION['message'] = $e->getMessage();
		$_SESSION['type'] = 'danger';
	}

	closeDatabase($database);
}
?>
