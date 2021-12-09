$(document).ready(function(){

	getBrands();
	
	function getBrands(){
		$.ajax({
			url : '../admin/action/getBrands.php',
			method : 'GET',
			// data : {addBrandButton:1},
			success : function(response){
				// console.log(response);
				var resp = $.parseJSON(response);

				var brandHTML = '';

				$.each(resp, function(index, value){
					brandHTML += '<tr>'+
									'<td>'+ value.brand_id +'</td>'+
									'<td>'+ value.brand_name +'</td>'+
									'<td><a class="btn btn-sm btn-info edit-brand"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;<a bid="'+value.brand_id+'" class="btn btn-sm btn-danger delete-brand"><i class="fas fa-trash-alt"></i></a></td>'+
								'</tr>';
				});

				$("#brand_list").html(brandHTML);

			}
		})
		
	}

	$("#add_brand_btn").on("click", function(){

		$.ajax({
			url : '../admin/action/addbrand.php',
			method : 'POST',
			data : $("#add-brand-form").serialize(),
			success : function(response){
				console.log(response)
				var resp = $.parseJSON(response);
				console.log(resp);
				
				if (resp === true) {
					getBrands();
					$("#add_brand_modal").modal('hide');
					alert("Term added successfully");
				}else if(resp === false){
					alert("Failed to add brand!");
				}
				
			}
		})

	});

	$(document.body).on('click', '.delete-brand', function(){

		var bid = $(this).attr('bid');

		console.log(bid);

		if (confirm("Are you sure to delete this Term")) {
			$.ajax({
				url : `../admin/action/deleteBrands.php?deleteBrandID=${bid}`,
				method : 'GET',
				// data : {DELETE_BRAND:1, bid:bid},
				success : function(response){
					var resp = $.parseJSON(response);
					if (resp === true) {
						alert("Term deleted successfully");
						getBrands();
					}else if(resp === false){
						alert("Term delete failed");
					}
				}
			});
		}else{
			alert('Cancelled');
		}

		

	});

	let brand_id;

	$(document.body).on("click", ".edit-brand", function(){

		var brand = $.parseJSON($.trim($(this).children("span").html()));
		console.log(brand);
		// brand_id  = brand.brand_id;
		$("input[name='brand_name']").val(brand.brand_name);
		$("input[name='brand_id']").val(brand.brand_id);

		$("#edit_brand_modal").modal('show');

		

	});

	$(".edit-brand-btn").on("click", function(){
		console.log($("#edit-brand-form").serialize());
		$.ajax({
			url : `../admin/action/updateBrands.php`,
			method : 'POST',
			data : $("#edit-brand-form").serialize(),
			success : function(response){
				// console.log(response);
				var resp = $.parseJSON(response);
				if (resp === true) {
					getBrands();
					$("#edit_brand_modal").modal('hide');
					alert("Term updated successfully");
				}else if(resp === false){
					alert("Term update failed");
				}
				
			}
		});
	});

});