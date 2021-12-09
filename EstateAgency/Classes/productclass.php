<?php

require('../Database/connection.php');

// inherit the methods from Connection
class Product extends Connection{


	function add_product($category, $brand, $title, $price, $desc, $image,$keywords){
		// return true or false
		return $this->query("insert into products(product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) values('$category', '$brand', '$title','$price', '$desc', '$image' , '$keywords')");
	}


	function read_categories(){
		return $this->fetch("select * from categories");
	}

	function read_brand(){
		return $this->fetch("select * from brands");
	}


	function update_one_product($id, $title, $price, $desc,$keywords){
		// return true or false
		return $this->query("update `products` set product_title='$title', product_price='$price', product_desc='$desc',product_keywords='$keywords'  where `product_id` = '$id'");
	}

	function select_all_products(){
		// return array or false
		return $this->fetch("select * from products");
	}

	function select_one_product($id){
		// return associative array or false
		return $this->fetch("SELECT * FROM products WHERE product_id='$id'");
	}

	function retrieve_product($id){
		return $this->fetch("SELECT product_image, product_title,product_price FROM products where products_id='$id' ");
	}

	/*Brand */
	function select_one_brand($id){
		// return associative array or false
		return $this->fetchOne("select * from brands where brand_id='$id'");
	}

	/**Category */
	function select_one_category($id){
		// return associative array or false
		return $this->fetchOne("select * from categories where cat_id='$id'");
	}

	function getCartItemQty($ip_add){
        return $this->query("select *  from cart where ip_add='$ip_add'");
    }

    function getCartItemQty_Login($session){
        return $this->query("select * count_item from cart where c_id='$session'");
    }



}

?>