$(document).ready(function(){
	var mem_id;
	
	DisplayData();
	
	$('#update').hide();
	
	$('#save').on('click', function(){
		if($('#firstname').val() == "" || $('#lastname').val() == "" || $('#address').val() == ""){
			alert("Hello World");
		}else{
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var address = $('#address').val();
			
			$.ajax({
				url: 'php/save_query.php',
				type: 'POST',
				data: {
					firstname: firstname,
					lastname: lastname,
					address: address
				},
				success: function(data){
					 $('#firstname').val('');
					 $('#lastname').val('');
					 $('#address').val('');
					 DisplayData();
				}
			});
		}
		
	});
	
	function DisplayData(){
		$.ajax({
			url: 'php/data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr('name');
		
		$.ajax({
			url: 'php/delete_query.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function(data){
				DisplayData();
				$('#update').hide();
				$('#save').show();	
				$('#firstname').val('');
				$('#lastname').val('');
				$('#address').val('');
			}
		});
	})
	
	$(document).on('click', '.edit', function(){
		var id = $(this).attr('name');
		
		$.ajax({
			url: 'php/edit.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				mem_id = getArray.mem_id;
				
				$('#firstname').val(getArray.firstname);
				$('#lastname').val(getArray.lastname);
				$('#address').val(getArray.address);
				
				$('#update').show();
				$('#save').hide();	
			}
		})
	});
	
	$('#update').on('click', function(){
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var address = $('#address').val();
		
		
		$.ajax({
			url: 'php/update_query.php',
			type: 'POST',
			data: {
				id: mem_id,
				firstname: firstname,
				lastname: lastname,
				address: address
			},
			success: function(){
				DisplayData();
				$('#firstname').val('');
				$('#lastname').val('');
				$('#address').val('');
				
				alert("Successfully Updated!");
				
				$('#update').hide();
				$('#save').show();	
				
				mem_id = "";
			}
		});
	});
});