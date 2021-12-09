<?php

require('../database/connection.php');

// inherit the methods from Connection
class Agent extends Connection{


	function add_agent($full_name, $email, $city, $contact_number,$image){
		// return true or false
		return $this->query("insert into `agent`(agent_name,agent_email, agent_city, agent_contact,image) values('$full_name', '$email','$city', '$contact_number','$image')");
	}

	function delete_one_agent($id){
		// return true or false
		return $this->query("delete from agent where agent_id = '$id'");
	}

	function update_one_agent($id,  $city, $contact_number){
		// return true or false
		return $this->query("update `agent` set agent_city='$city', agent_contact='$contact_number'  where `agent_id` = '$id'");
	}

	function select_all_agents(){
		// return array or false
		return $this->fetch("select * from agent");
	}

	function select_one_agent($id){
		// return associative array or false
		return $this->fetch("select * from agent where agent_id='$id'");
	}


}

?>