

 $(document).ready(function(){
 	/**
 	* Mascaras
 	*/
 	$('#placa').mask('SSS-0000');


 	/**
 	* Hide
 	*/ 
 	$('#chaves').hide();
 	$('#servico').hide();
 	$('#recebimento').hide();
 	$('#btnRegistros').hide();



 	/** 
 	* Pagina Index Filtro de escolha
 	*/

 	$('#tipo').change(function(){
 		var x = $('#tipo').val();
 		if(x == 'cc'){
 			
 		}
 		else if (x == 'recebimento_servico'){
 			
 		}

 	});

 	/**
	* Passa os dados  para o Modal, e atualiza o link para exclusão dos registros
 	*/
 	$('#delete-modal').on('show.bs.modal', function (e) {
   		var button = $(e.relatedTarget);
   		var id = button.data('del');
   		var modal = $(this);
   		modal.find('.modal-title').text('Excluir Porteiro # ' + id);
   		modal.find('#confirm').attr('href', 'delete.php?id=' + id);
	});
 });