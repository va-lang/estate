$(document).ready(function(){  
        
    getOrders();
 
    function getOrders(){
        $.ajax({

            url : '../admin/action/getOrders.php',//look at the getOrders.php and see the other codes eg. getCategories and replicate what i have done ;get the controller and classes: if you cant do it remove it from the nav bar
            method : 'GET',
            //data : {GET_CUSTOMER_ORDERS:1},
            success : function(response){
                
                //console.log(response);
                var resp = $.parseJSON(response);

                var customerOrderHTML = '';

                $.each(resp, function(index, value){
                customerOrderHTML += '<tr>'+
                                        '<td>'+ value.order_id +'</td>'+
                                        '<td>'+ value.customer_id +'</td>'+
                                        '<td>'+ value.invoice_no +'</td>'+
                                        '<td>'+ value.order_date +'</td>'+
                                        '<td>'+ value.order_status +'</td>'+
                                        '<td><span style="display:none;">'+JSON.stringify(value)+'</span></a>&nbsp;<a cid="'+value.order_id+'></i></a></td>'+
                                    '</tr>';
                });

                $("#customer_order_list").html(customerOrderHTML);

               

            }
        })

    }


});