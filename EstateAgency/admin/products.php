<?php

session_start();
if(!isset($_SESSION['email'])){
  header('location: login.php');
}
require('./database/connection.php');
// return array of all rows, or false (if it failed)





function read_one_category($id){
  $conn = new Connection();
  return $conn->fetch("select * from categories where c_id='$id'");
}


?>

<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">

    <?php include "./templates/sidebar.php"; ?>

    <div class="row">
      <div class="col-10">
        <h2>Manage Houses</h2>
      </div>
      <div class="col-2">
        <a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Add Product</a>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Location</th>
            <th>Term</th>
            <th>Type</th>
            <th>Price</th>
            <th>Description</th>
            <th>Keywords</th>
          </tr>
        </thead>
        <tbody id="product_list">


          <!-- <tr>
              <td>1</td>
              <td>ABC</td>
              <td>FDGR.JPG</td>
              <td>122</td>
              <td>eLECTRONCS</td>
              <td>aPPLE</td>
              <td><a class="btn btn-sm btn-info"></a><a class="btn btn-sm btn-danger">Delete</a></td>
            </tr> -->
        </tbody>
      </table>
    </div>
    </main>
  </div>
</div>



<!-- Add Product Modal start -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add House</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Location</label>
                <select name="category" class="form-control category_list">
                  <?php foreach ($categories as $category) {
                    // echo "<option value=$category['cat_id']>$category['cat_name']</option>"
                    echo '<option value=' . $category['cat_id'] . '>' . $category['cat_name'] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Term</label>
                <select name="brand" i class="form-control brand_list">
                  <?php foreach ($brands as $brand) {
                    // echo "<option value=$category['cat_id']>$category['cat_name']</option>"
                    echo '<option value=' . $brand['brand_id'] . '>' . $brand['brand_name'] . '</option>';
                  }
                  ?>
                  <!-- <option value="volvo">Volvo</option> -->

                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Type</label>
                <input type="text" name="title" class="form-control" placeholder="Enter the type of Layout">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter Price">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>House Description</label>
                <textarea class="form-control" name="desc" placeholder="Enter description"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file" name="image" class="form-control">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Keywords <small>(eg: short term, long term, to buy)</small></label>
                <input type="text" name="keywords" class="form-control" placeholder="Enter  Keywords">
              </div>
            </div>

            <input type="hidden" name="addProduct" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary add-product">Add House</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add Product Modal end -->

<!-- Edit Product Modal start -->
<div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-product-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Type</label>
                <input type="text" name="prod_title" class="form-control" placeholder="Enter the type of layout">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Price</label>
                <input type="text" name="prod_price" class="form-control" placeholder="Enter House Price">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>House Description</label>
                <textarea class="form-control" name="prod_desc" placeholder="Product Description"></textarea>
              </div>
            </div>
            <input type="hidden" name="pid">
            <input type="hidden" name="updateProduct" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary submit-edit-product">Edit House</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Product Modal end -->

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/products.js"></script>