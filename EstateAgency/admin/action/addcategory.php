<?php

require('../controllers/categorycontroller.php');

// check if theres a POST variable with the name 'addProductButton'
if(isset($_POST['addCategoryButton'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['name'];

   
    // call the add_product_controller function: return true or false
    $result = add_category_controller($name);

    echo json_encode($result);

}



// if(isset($_GET['deleteBrandID'])){

//     $id = $_GET['deleteBrandID'];

//     // call the function
//     $result = delete_brand_controller($id);

//     if($result === true) header("Location: ../brands.php");
//     else echo "deletion failed";
// }


// updating

if(isset($_POST['updatebutton'])){

    $id = $_GET['id'];
    $name = $_POST['name'];
   

    // call the function
    $result = update_category_controller($id, $name);

    if($result){
        header("Location: ../categories.php");
    } else {
        echo "Update failed";
    } 
}


?>