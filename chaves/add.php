<?php 
	require_once('functions.php');
	add();	
 ?>

 <?php include(HEADER_TEMPLATE); ?>
 <h2>Nova Chave</h2>
 <form action="add.php" method="post">
 	<hr />
 	<div class="row">
 		<div class="form-group col-md-7">
 			<label for="nomeporteiro">CODIGO CHAVE</label>
 			<input type="text" name="chave['codchave']" class="form-control" placeholder="Codigo Chave" maxlength="5" required="required" >
 		</div>
 		<div class="form-group col-md-7">
 			<label for="nomeporteiro">Local Chave</label>
 			<input type="text" name="chave['local']" class="form-control" placeholder="Local Chave" maxlength="40" required="required" >
 		</div>
 	</div>
 	<div id="actions" class="row">
		<div clas="col-md-12">
			<button type="submit" class="btn btn-primary">Salvar</button>
			<a href="index.php" class="btn btn-default">Cancelar</a>			
		</div>
	</div>
 </form>
 <?php include(FOOTER_TEMPLATE); ?>