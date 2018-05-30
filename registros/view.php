<?php 
	require_once('functions.php');
	view($_GET['id']);
 ?>
 <?php include(HEADER_TEMPLATE); ?>

 <h2>Veículo : <?php  echo $veiculo['modelo'];?> PLACA - <?php  echo $veiculo['placa'];?> ></h2>
 <hr />
 <?php if( !empty($_SESSION['message'])) :?>
 	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Tipo Veículo</dt>
	<dd><?php echo $veiculo['tipo']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Modelo Veículo</dt>
	<dd><?php echo $veiculo['modelo']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Placa Veículo</dt>
	<dd><?php echo $veiculo['placa']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Motorista Veículo</dt>
	<dd><?php echo $veiculo['motorista']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Empresa</dt>
	<dd><?php echo $veiculo['empresa']; ?></dd>
</dl>
<div class="row" id="actions">
	<div class="col-md-12">
		<a href="edit.php?id=<?php echo $veiculo['ukey']; ?>" class="btn btn-primary">Editar</a>
		<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>
<?php include(FOOTER_TEMPLATE); ?>