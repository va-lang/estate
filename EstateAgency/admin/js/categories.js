$(document).ready(function(){

	getCategory();
	
	function getCategory(){
		$.ajax({
			url : '../admin/action/getCategory.php',
			method : 'GET',
			//data : {GET_CATEGORIES:1},
			success : function(response){
				//console.log(response);
				var resp = $.parseJSON(response);
				// console.log(resp);

				var brandHTML = '';

				$.each(resp, function(index, value){
					brandHTML += '<tr>'+
					                '<td>'+ value.cat_id +'</td>'+
									'<td>'+ value.cat_name +'</td>'+
									'<td><a class="btn btn-sm btn-info edit-category"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;<a cid="'+value.cat_id+'" class="btn btn-sm btn-danger delete-category"><i class="fas fa-trash-alt"></i></a></td>'+
								'</tr>';
				});

				$("#category_list").html(brandHTML);

			}
		})
		
	}
	$("#add_category_btn").on("click", function(){

		$.ajax({
			url : '../admin/action/addcategory.php',
			method : 'POST',
			data : $("#add-category-form").serialize(),
			success : function(response){
				console.log(response)
				var resp = $.parseJSON(response);
				console.log(resp);
				
				if (resp === true) {
					getCategory();
					$("#add_category_modal").modal('hide');
					alert("New Category added successfully");
				}else if(resp === false){
					alert("Failed to add Category!");
				}
				
			}
		})

	});

	$(document.body).on('click', '.delete-category', function(){

		var bid = $(this).attr('cid');

		console.log(bid);

		if (confirm("Are you sure to delete this category")) {
			$.ajax({
				url : `../admin/action/deletecategory.php?deleteCategoryID=${bid}`,
				method : 'GET',
				// data : {DELETE_BRAND:1, bid:bid},
				success : function(response){
					console.log(response)
					var resp = $.parseJSON(response);
					if (resp === true) {
						alert("Category deleted successfully");
						getCategory();
					}else if(resp === false){
						alert("Category delete failed");
					}
				}
			});
		}else{
			alert('Cancelled');
		}

		

	});
	let cat_id;

	$(document.body).on("click", ".edit-category", function(){

		var category = $.parseJSON($.trim($(this).children("span").html()));
		console.log(category);
		// brand_id  = brand.brand_id;
		$("input[name='cat_name']").val(category.cat_name);
		$("input[name='cat_id']").val(category.cat_id);

		$("#edit_category_modal").modal('show');

		

	});

	$(".edit-category-btn").on("click", function(){
		console.log($("#edit-category-form").serialize());
		$.ajax({
			url : `../admin/action/updatecategory.php`,
			method : 'POST',
			data : $("#edit-category-form").serialize(),
			success : function(response){
				// console.log(response);
				var resp = $.parseJSON(response);
				if (resp === true) {
					getCategory();
					$("#edit_category_modal").modal('hide');
					alert("Category updated successfully");
				}else if(resp === false){
					alert("Category update failed");
				}
				
			}
		});
	});



	// $(".edit-category-btn").on('click', function(){

	// 	$.ajax({
	// 		url : '../admin/classes/Products.php',
	// 		method : 'POST',
	// 		data : $("#edit-category-form").serialize(),
	// 		success : function(response){
	// 			var resp = $.parseJSON(response);
	// 			if (resp.status == 202) {
	// 				getCategories();
	// 				alert(resp.message);
	// 			}else if(resp.status == 303){
	// 				alert(resp.message);
	// 			}
	// 			$("#edit_category_modal").modal('hide');
	// 		}
	// 	})

	// });


});