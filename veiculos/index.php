<?php 
	require_once('functions.php');
	index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
 	<div class="row">
 		<div class="col-sm-6">
 			<h2>Veículos</h2> 			
 		</div>
 		<div class="col-sm-6 text-right h2">
 			<a href="add.php" class="btn btn-primary"><i class="fa fa-plus"></i>Inserir Novo Veículo</a>
 			<a href="index.php" class="btn btn-default"><i class="fa fa-plus"></i>Atualizar</a>
 		</div>
 	</div>
</header>

<?php if(!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert" >
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<?php echo $_SESSION['message']; ?>
</div>
<?php clear_messages(); ?>

<?php endif; ?>

<hr>

<table class="table table-hover">
	<thead>
		<tr>
			<th style="display: none;">UKEY</th>
			<th width="30%">Tipo</th>
			<th >Modelo</th>
			<th>Placa</th>
			<th>Motorista</th>			
			<th>Empresa</th>			
		</tr>
	</thead>
	<tbody>
		<?php if($veiculos) : ?>
		<?php foreach($veiculos as $veiculo) : ?>
			<tr>
				<td style="display: none;"><?php echo $veiculo['ukey']; ?></td>
				<td><?php echo $veiculo['tipo']; ?></td>
				<td><?php echo $veiculo['modelo']; ?></td>
				<td><?php echo $veiculo['placa']; ?></td>
				<td><?php echo $veiculo['motorista']; ?></td>
				<td><?php echo $veiculo['empresa']; ?></td>				
				<td class="actions text">
					<a href="view.php?id=<?php echo $veiculo['ukey']; ?>" class="btn btn-sm btn-sucess">
						<i class="fa fa-eye"></i>Visualizar
					</a>
					<a href="edit.php?id=<?php echo $veiculo['ukey']; ?>" class="btn btn-sm btn-warning">
						<i class="fa fa-pencil"></i>Editar
					</a>
					<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-del="<?php echo $veiculo['ukey']; ?>">
						<i class="fa fa-trash"></i>Excluir
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="6">Nenhum registro encontrado.</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>
<?php include('modal.php') ?>
<?php include(FOOTER_TEMPLATE); ?>