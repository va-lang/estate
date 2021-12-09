<?php

require('../Classes/agentclass.php');

function add_agent_controller($full_name, $email,  $city, $contact_number, $image){
    //create an instance of the product class
    $agent_instance = new Agent();
    //call the method from the class
    return $agent_instance->add_agent($full_name, $email, $city, $contact_number,$image);

}

function delete_agent_controller($id){
    //create an instance of the product class
    $agent_instance = new Agent();
    //call the method from the class
    return $agent_instance->delete_one_agent($id);
    
}


function update_agent_controller($id, $city, $contact_number){
    //create an instance of the product class
    $agent_instance = new Agent();
    //call the method from the class
    return $agent_instance->update_one_agent($id, $city, $contact_number);
    
}


function select_all_agents_controller(){
    //create an instance of the product class
    $agent_instance = new Agent();
    //call the method from the class
    return $agent_instance->select_all_agents();
    
}

function select_one_agent_controller($id){
    //create an instance of the product class
    $agent_instance = new Agent();
    //call the method from the class
    return $agent_instance->select_one_agent($id);
    
}


?>