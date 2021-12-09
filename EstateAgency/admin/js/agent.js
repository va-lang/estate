$(document).ready(function(){


	getAgent();

	

	function getAgent(){
		$.ajax({
			url : '../admin/action/getAgent.php',
			method : 'GET',
			//data : {GET_PRODUCT:1},
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				
				var agentHTML = '';

				$.each(resp, function(index, value){
					
					agentHTML += '<tr>'+
									'<td>'+ value.agent_id  +'</td>'+
										'<td><img width="60" height="60" src="'+value.image.substring(3)+'"></td>'+
									  '<td>'+ value.agent_name +'</td>'+
									  '<td>'+ value.agent_email +'</td>'+
									  '<td>'+ value.agent_city+'</td>'+
									  '<td>'+ value.agent_contact +'</td>'+
									  '<td><a class="btn btn-sm btn-info edit-agent" style="color:#fff;"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;<a agent_id="'+value.agent_id+'" class="btn btn-sm btn-danger delete-agent" style="color:#fff;"><i class="fas fa-trash-alt"></i></a></td>'+
									'</tr>';

				});

				$("#agent_list").html(agentHTML);

				
			}

		});
	}

	

		
	


	$(".add-agent").on("click", function(){

		// console.log("I clicked")

		$.ajax({

			url : '../admin/action/addagent.php',
			method : 'POST',
			data : new FormData($("#add-agent-form")[0]),
			contentType : false,
			cache : false,
			processData : false,
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp === true) {
					$("#add-agent-form").trigger("reset");
					$("#add_agent_modal").modal('hide');

					alert("Agent added successfully");
					getAgent();
				}else if(resp === false){
					alert("Failed to add Agent");
				}
			}

		});

	});


	$(document.body).on('click', '.edit-agent', function(){

		console.log($(this).find('span').text());

		var agent = $.parseJSON($.trim($(this).find('span').text()));

		console.log(agent);

		
		$("input[name='agent_city']").val(agent.agent_city);
		// $("input[name='e_product_qty']").val(product.product_qty);
		$("input[name='agent_contact']").val(agent.agent_contact);
		// $("input[name='e_product_keywords']").val(product.product_keywords);
		// $("input[name='e_product_image']").siblings("img").attr("src", "../product_images/"+product.product_image);
		$("input[name='agent_id']").val(agent.agent_id);
		$("#edit_agent_modal").modal('show');

	});

	$(".submit-edit-agent").on('click', function(){

		$.ajax({

			url : '../admin/action/updateAgent.php',
			method : 'POST',
			data : new FormData($("#edit-agent-form")[0]),
			contentType : false,
			cache : false,
			processData : false,
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp === true) {
					$("#edit-agent-form").trigger("reset");
					$("#edit_agent_modal").modal('hide');
					getAgent();
					alert("Agent updated successfully");
				}else if(resp === false){
					alert("Agent update failed");
				}
			}

		});


	});

	$(document.body).on('click', '.delete-agent', function(){

		var agent_id = $(this).attr('agent_id');
		console.log(agent_id)
		if (confirm("Are you sure to delete this item ?")) {
			$.ajax({

				url : '../admin/action/deleteagent.php',
				method : 'POST',
				data : {deleteAgent: 1, agent_id:agent_id},
				success : function(response){
					console.log(response)
				
					var resp = $.parseJSON(response);
					if (resp  === true) {
						getAgent();
						alert("Agent deleted successfully");
					}else if (resp === false) {
						alert("Failed to delete Agent");
					}
				}

			});
		}else{
			alert('Cancelled');
		}
		

	});

});