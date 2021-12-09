$(document).ready(function(){


	getProducts();

	getCategories();

	getBrands();

	function getProducts(){
		$.ajax({
			url : '../admin/action/getProduct.php',
			method : 'GET',
			//data : {GET_PRODUCT:1},
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				
				var productHTML = '';

				$.each(resp, function(index, value){
					cat_id = value.product_cat;
					b_id = value.product_brand;
					getCategoryName(value.product_cat);
					getBrandName(value.product_brand);
					

					productHTML += '<tr>'+
									'<td>'+ value.product_id  +'</td>'+
										'<td><img width="60" height="60" src="'+value.product_image.substring(3)+'"></td>'+
									  '<td data-id='+ value.product_cat +'>' +'</td>'+
									  '<td data-brand='+ value.product_brand +'>' +'</td>'+
									  '<td>'+ value.product_title +'</td>'+
									  '<td>'+ value.product_price +'</td>'+
									  '<td>'+ value.product_desc +'</td>'+
									  '<td>'+ value.product_keywords +'</td>'+
									  '<td><a class="btn btn-sm btn-info edit-product" style="color:#fff;"><span style="display:none;">'+JSON.stringify(value)+'</span><i class="fas fa-pencil-alt"></i></a>&nbsp;<a pid="'+value.product_id+'" class="btn btn-sm btn-danger delete-product" style="color:#fff;"><i class="fas fa-trash-alt"></i></a></td>'+
									'</tr>';

				});

				$("#product_list").html(productHTML);

				
			}

		});
	}

	function getCategoryName(id){
	
		$.ajax({
			url: '../admin/action/getCategoryName.php',
			method : 'POST',
			data: {cat_id: id},

			success: function(response) {
				
				var resp = $.parseJSON(response);
				// $("data-id").html(resp.cat_name);
				$("tr").find(`[data-id='${id}']`).html(resp.cat_name)
				
			}

		});

		
	}

	
	function getBrandName(id){
		
		$.ajax({
			url: '../admin/action/getBrandName.php',
			method : 'POST',
			data: {b_id: id},

			success: function(response) {
				
				var resp = $.parseJSON(response);
				
				$("tr").find(`[data-brand='${id}']`).html(resp.brand_name)
			}

		});

		
	}

	function getCategories(){
		$.ajax({
			url: '../admin/action/getCategory.php',
			method : 'GET',
			success: function(response) {
				
				var resp = $.parseJSON(response);
				console.log(resp);
				

				var catSelectHTML = '<option value="">Select Category</option>';

				$.each(resp, function(index, value){

					catSelectHTML += '<option value="'+ value.cat_id +'">'+ value.cat_name +'</option>';

				});

				$(".category_list").html(catSelectHTML);

			}

		});
	}

	function getBrands(){
		$.ajax({
			url: '../admin/action/getBrands.php',
			method : 'GET',
			success: function(response) {
				
				var resp = $.parseJSON(response);
				console.log(resp);
				

				var brandSelectHTML = '<option value="">Select Brand</option>';
				$.each(resp, function(index, value){

					brandSelectHTML += '<option value="'+ value.brand_id +'">'+ value.brand_name +'</option>';

				});

				$(".brand_list").html(brandSelectHTML);

			}

		});
	}





	$(".add-product").on("click", function(){

		$.ajax({

			url : '../admin/action/addproduct.php',
			method : 'POST',
			data : new FormData($("#add-product-form")[0]),
			contentType : false,
			cache : false,
			processData : false,
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp === true) {
					$("#add-product-form").trigger("reset");
					$("#add_product_modal").modal('hide');

					alert("Product added successfully");
					getProducts();
				}else if(resp === false){
					alert("Failed to add product");
				}
			}

		});

	});


	$(document.body).on('click', '.edit-product', function(){

		console.log($(this).find('span').text());

		var product = $.parseJSON($.trim($(this).find('span').text()));

		console.log(product);

		$("input[name='prod_title']").val(product.product_title);
		// $("select[name='e_brand_id']").val(product.brand_id);
		// $("select[name='e_category_id']").val(product.cat_id);
		$("textarea[name='prod_desc']").val(product.product_desc);
		// $("input[name='e_product_qty']").val(product.product_qty);
		$("input[name='prod_price']").val(product.product_price);
		// $("input[name='e_product_keywords']").val(product.product_keywords);
		// $("input[name='e_product_image']").siblings("img").attr("src", "../product_images/"+product.product_image);
		$("input[name='pid']").val(product.product_id);
		$("#edit_product_modal").modal('show');

	});

	$(".submit-edit-product").on('click', function(){

		$.ajax({

			url : '../admin/action/updateproduct.php',
			method : 'POST',
			data : new FormData($("#edit-product-form")[0]),
			contentType : false,
			cache : false,
			processData : false,
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp === true) {
					$("#edit-product-form").trigger("reset");
					$("#edit_product_modal").modal('hide');
					getProducts();
					alert("Product updated successfully");
				}else if(resp === false){
					alert("Product update failed");
				}
			}

		});


	});

	$(document.body).on('click', '.delete-product', function(){

		var pid = $(this).attr('pid');
		console.log(pid)
		if (confirm("Are you sure to delete this item ?")) {
			$.ajax({

				url : '../admin/action/deleteproduct.php',
				method : 'POST',
				data : {DELETE_PRODUCT: 1, pid:pid},
				success : function(response){
					console.log(response)
				
					var resp = $.parseJSON(response);
					if (resp  === true) {
						getProducts();
						alert("Product deleted successfully");
					}else if (resp === false) {
						alert("Failed to delete product");
					}
				}

			});
		}else{
			alert('Cancelled');
		}
		

	});

});