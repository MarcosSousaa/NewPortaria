<?php 
	require_once('functions.php');
	add();	
 ?>

 <?php include(HEADER_TEMPLATE); ?>
 <h2>Novo Porteiro</h2>
 <form action="add.php" method="post">
 	<hr />
 	<div class="row">
 		<div class="form-group col-md-7">
 			<label for="nomeporteiro">Nome Porteiro</label>
 			<input type="text" name="porteiro['nomeporteiro']" class="form-control" placeholder="Nome Porteiro" maxlength="40" required="required" >
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