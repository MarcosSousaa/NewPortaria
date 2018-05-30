<?php 
	require_once('functions.php');
	edit();
 ?>
 <?php include(HEADER_TEMPLATE); ?>

 <h2>Atualizar Chave</h2>
 <form action="edit.php?id=<?php echo $chave['ukey']; ?>" method="POST">
 	<div class="row">
 		<div class="form-group col-md-7">
 			<label>Codigo Chave</label>
 			<input type="text" name="chave['codchave']" value="<?php echo $chave['codchave']; ?>">
 		</div>
 		<div class="form-group col-md-7">
 			<label>Local Chave</label>
 			<input type="text" name="chave['local']" value="<?php echo $chave['local']; ?>">
 		</div>
 	</div>
 	<div id="actions" class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="index.php" class="btn btn-default">Cancelar</a>
	</div>
 </form>

<hr>

 <?php include(FOOTER_TEMPLATE); ?>