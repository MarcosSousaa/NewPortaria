<?php 
	require_once('functions.php');
	view($_GET['id']);
 ?>
 <?php include(HEADER_TEMPLATE); ?>

 <h2>Porteiro <?php  echo $porteiro['nomeporteiro']?></h2>
 <hr />
 <?php if( !empty($_SESSION['message'])) :?>
 	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome Porteiro</dt>
	<dd><?php echo $porteiro['nomeporteiro']; ?></dd>
</dl>
<div class="row" id="actions">
	<div class="col-md-12">
		<a href="edit.php?id=<?php echo $porteiro['ukey']; ?>" class="btn btn-primary">Editar</a>
		<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>
<?php include(FOOTER_TEMPLATE); ?>