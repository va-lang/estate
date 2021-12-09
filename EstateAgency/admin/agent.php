<?php

session_start();
if(!isset($_SESSION['email'])){
  header('location: login.php');
}
require('./database/connection.php');
// return array of all rows, or false (if it failed)




?>

<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">

    <?php include "./templates/sidebar.php"; ?>

    <div class="row">
      <div class="col-10">
        <h2>Manage Agent</h2>
      </div>
      <div class="col-2">
        <a href="#" data-toggle="modal" data-target="#add_agent_modal" class="btn btn-primary btn-sm">Add Agent</a>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>City Managed</th>
            <th>Contact</th>
          </tr>
        </thead>
        <tbody id="agent_list">


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
<div class="modal fade" id="add_agent_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Agent</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-agent-form" enctype="multipart/form-data">
          <div class="row">
           
            <div class="col-12">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Agent Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Agent Email">
              </div>
            </div>
			<div class="col-12">
              <div class="form-group">
                <label>City Managed</label>
                <input type="text" name="city" class="form-control" placeholder="Enter City Agent Manages">
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file" name="image" class="form-control">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Contact</label>
                <input type="text" name="contact" class="form-control" placeholder="Enter Agent Contact">
              </div>
            </div>

            <input type="hidden" name="addAgent" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary add-agent">Add Agent</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add Product Modal end -->

<!-- Edit Product Modal start -->
<div class="modal fade" id="edit_agent_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Agent</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-agent-form" enctype="multipart/form-data">
          <div class="row">
            
            <div class="col-12">
            <input type="hidden" name="agent_id">
              <div class="form-group">
                <label>City Managed</label>
                <input type="text" name="agent_city" class="form-control" placeholder="Enter City Agent Manages">
              </div>
            </div>
		        <div class="col-12">
              <div class="form-group">
                <label>Contact</label>
                <input type="text" name="agent_contact" class="form-control" placeholder="Enter Contact Number">
              </div>
            </div>
            
            <input type="hidden" name="updateAgent" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary submit-edit-agent">Edit Agent</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Product Modal end -->

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/agent.js"></script>