<?php

require('../database/connection.php');

// inherit the methods from Connection
class Item extends Connection{


	function add_product($category, $brand, $title, $price, $desc, $image,$keywords){
		// return true or false
		return $this->query("insert into products(product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) values('$category', '$brand', '$title','$price', '$desc', '$image' , '$keywords')");
	}

	function read_one_category($id){
		return $this->fetch("select * from categories where c_id='$id'");
	}

	function read_brand(){
		return $this->fetch("select * from brands");
	}


	function update_one_product($id, $title, $price, $desc){
		// return true or false
		return $this->query("update `products` set product_title='$title', product_price='$price', product_desc='$desc'  where `product_id` = '$id'");
	}

	function delete_one_product($id){
		// return true or false
		return $this->query("delete from `products` where product_id = '$id'");
	}

	function select_all_products(){
		// return array or false
		return $this->fetch("select * from products");
	}

	function select_one_product($id){
		// return associative array or false
		return $this->fetchOne("select * from products where product_id='$id'");
	}


	// function getAllProductDetails(){
	// 	$data = $this->fetch("select * from products");

	// 	if($data){
	// 		foreach($data as $item) { 
	// 			$c_id = $item['product_cat'];
	// 			$b_id = $item['product_brand']; 
			
	// 			$msg["category"] = $this->fetch("select * from brands where brand_id='$c_id'");
			
	// 			$msg["brand"] = select_one_brand_controller($b_id);
			
	// 		}
	// 	}

	// }
	
	function getOrder(){
        return $this->fetch("select * from orders");
    }


}

?>