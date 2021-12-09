<?php

require('../database/connection.php');

// inherit the methods from Connection
class Category extends Connection{


	function add_category($name){
		// return true or false
		return $this->query("insert into `categories`(cat_name) values('$name')");
	}

	function delete_one_category($id){
		// return true or false
		// $this->delete_one_product($id);
	
		return $this->query("delete from categories where cat_id = '$id'");
	}

	function delete_one_product($id){
		// return true or false
		return $this->query("delete from products where product_cat = '$id'");
	}

	function update_one_category($id, $name){
		// return true or false
		return $this->query("update `categories` set cat_name='$name' where `cat_id` = '$id'");
	}

	function select_all_categories(){
		// return array or false
		return $this->fetch("select * from categories");
	}

	function select_one_category($id){
		// return associative array or false
		return $this->fetchOne("select * from categories where cat_id='$id'");
	}


}

?>