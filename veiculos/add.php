<?php 
	require_once('functions.php');
	add();	
 ?>

 <?php include(HEADER_TEMPLATE); ?>
 <h2>Novo Veículo</h2>
 <form action="add.php" method="post">
 	<hr />
 	<div class="row">
 		<div class="form-group col-md-7">
 			<label for="tipo">Tipo Veículo</label>
 			<select class="form-control" name="veiculo['tipo']">
 				<option value="" disabled selected>Escolha uma opção</option>
 				<option value="CAMINHAO">Caminhão</option>
 				<option value="CARRO">Carro</option>
 				<option value="MOTO">Moto</option>
 			</select> 			
 		</div>
 		<div class="form-group col-md-3">
 			<label for="">Modelo Veículo</label>
 			<input type="text" name="veiculo['modelo']" class="form-control">
 		</div>
 		<div class="form-group col-md-2">
 			<label for="">Placa Veículo</label>
 			<input id="placa" type="text" name="veiculo['placa']" class="form-control">
 		</div>
 	</div>

 	 	<div class="row">
 		<div class="form-group col-md-7">
 			<label for="tipo">Motorista Veículo</label>
 			<input type="text" name="veiculo['motorista']" class="form-control">
 		</div>
 		<div class="form-group col-md-3">
 			<label for="">Empresa</label>
 			<input type="text" name="veiculo['empresa']" class="form-control">
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