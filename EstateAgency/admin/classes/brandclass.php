<?php

require('../database/connection.php');

// inherit the methods from Connection
class Product extends Connection{


	function add_brand($name){
		// return true or false
		return $this->query("insert into `brands`(brand_name) values('$name')");
	}

	function delete_one_brand($id){
		// return true or false
		return $this->query("delete from brands where brand_id = '$id'");
	}

	function update_one_brand($id, $name){
		// return true or false
		return $this->query("update `brands` set brand_name='$name' where `brand_id` = '$id'");
	}

	function select_all_brands(){
		// return array or false
		return $this->fetch("select * from brands");
	}

	function select_one_brand($id){
		// return associative array or false
		return $this->fetchOne("select * from brands where brand_id='$id'");
	}


}

?>