$(document).ready(function(){

	getCustomer();
	

	function getCustomer(){
		$.ajax({
			url : '../admin/action/getCustomer.php',
			method : 'GET',
			//data : {GET_CUSTOMERS:1},
			success : function(response){
				
				//console.log(response);
				var resp = $.parseJSON(response);

				var customersHTML = '';

				$.each(resp, function(index, value){
					customersHTML += '<tr>'+
					                '<td>'+ value.customer_id +'</td>'+
									'<td>'+ value.customer_name +'</td>'+
									'<td>'+ value.customer_email +'</td>'+
									'<td>'+ value.customer_country +'</td>'+
									'<td>'+ value.customer_city +'</td>'+
									'<td>'+ value.customer_contact +'</td>'+
									'<td>&nbsp;<a cid="'+value.customer_id+'></a></td>'+
								'</tr>';
			    });

				$("#customer_list").html(customersHTML);

				

				

			}
		})
		
	}

	


});