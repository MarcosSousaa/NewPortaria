<?php 
	require_once('functions.php');
	edit();
 ?>
 <?php include(HEADER_TEMPLATE); ?>

 <h2>Atualizar Porteiro</h2>
 <form action="edit.php?id=<?php echo $porteiro['ukey']; ?>" method="POST">
 	<div class="row">
 		<div class="form-group col-md-7">
 			<label>Nome Porteiro</label>
 			<input type="text" name="porteiro['nomeporteiro']" value="<?php echo $porteiro['nomeporteiro']; ?>">
 		</div>
 	</div>
 	<div id="actions" class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="index.php" class="btn btn-default">Cancelar</a>
	</div>
 </form>

<hr>

 <?php include(FOOTER_TEMPLATE); ?>