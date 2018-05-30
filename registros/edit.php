<?php 
	require_once('functions.php');
	edit();
 ?>
 <?php include(HEADER_TEMPLATE); ?>

 <h2>Atualizar Veículos</h2>
 <form action="edit.php?id=<?php echo $veiculo['ukey']; ?>" method="POST">
 	<div class="row">
 		<div class="form-group col-md-7">
 			<label>Tipo Veículo</label>
 			<select class="form-control" name="veiculo['tipo']">
 				<option value="" disabled selected>Escolha uma opção</option>
 				<option value="CAMINHAO" <?php if($veiculo['tipo'] == "CAMINHAO"){ echo "SELECTED";}?>>Caminhão</option>
 				<option value="CARRO" <?php if($veiculo['tipo'] == "CARRO"){ echo "SELECTED";}?>>Carro</option>
 				<option value="MOTO" <?php if($veiculo['tipo'] == "MOTO"){ echo "SELECTED";}?>>Moto</option>
 			</select> 			
 		</div>
 		<div class="form-group col-md-3">
 			<label>Modelo Veículo</label>
 			<input type="text" name="veiculo['modelo']" value="<?php echo $veiculo['modelo']; ?>">
 		</div>
 		<div class="form-group col-md-2">
 			<label>Placa Veículo</label>
 			<input type="text" name="veiculo['placa']" value="<?php echo $veiculo['placa']; ?>">
 		</div>
 	</div>

 	<div class="row">
 		<div class="form-group col-md-7">
 			<label>Motorista Veículo</label>
 			<input type="text" name="veiculo['motorista']" value="<?php echo $veiculo['motorista']; ?>">
 		</div>
 		<div class="form-group col-md-3">
 			<label>Empresa</label>
 			<input type="text" name="veiculo['empresa']" value="<?php echo $veiculo['empresa']; ?>">
 		</div> 		
 	</div>

 	<div id="actions" class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="index.php" class="btn btn-default">Cancelar</a>
	</div>
 </form>

<hr>

 <?php include(FOOTER_TEMPLATE); ?>