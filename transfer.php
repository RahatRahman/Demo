<?php 
  include_once 'include/header.php';
 
 include_once 'classes/Superadmin.php';
    $obj_sup = new Superadmin();
 
        $statment=$obj_sup->view_all_member_name();
        
        if (isset($_POST['btn'])) {
          // print_r($_POST);
          $statment=$obj_sup->insert_transfer_info($_POST);
        }

 ?>

    <!-- header-starts -->
    
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <h3 class="title1">Transfers</h3>
        <div class="blank-page widget-shadow scroll" id="style-2 div1">
          
	<div class="form-group row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <h2 style="color:green"><?php
    if(isset($message)){
        echo $message;
        unset($message);
          }
      ?></h2>
      <h3>Add New Transfer</h3>
    </div>
    <div class="col-sm-4 text-right">
          <a class="btn btn-primary" href="all_transfer.php" role="button">Back</a>
        </div>
  </div>


  

  <div class="container">

    <div class="form-group row">
      <div class="col-sm-4">
        <h4>Transfer Information:</h4>
      </div>
    </div>
    <form action="" method="post">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Employee to Transfer</label>
        <div class="col-sm-4">
          <select class="form-control" name="fullName">
          <option selected>Select Employee</option>
          <?php while($row = $statment->fetch(PDO::FETCH_ASSOC)){?>
            <option value="<?php echo $row['fullName'];?>"><?php echo $row['fullName'];?></option>  
            <?php }?>
          </select>
        </div>
      </div>


      <!-- <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Forward Application To</label>
        <div class="col-sm-4">
          <select class="form-control">
            <option selected>John Smith</option>
            <option value="1">Paul Walker</option>
            <option value="2">Ben Foster</option>
            <option value="3">Peter Parker</option>    
          </select>
        </div>
      </div> -->

      <div class="form-group row">
        <label for="Dob" class="col-sm-2 col-form-label">Transfer Date</label>
        <div class="col-sm-4">
          <input type="Date" class="form-control" id="Dob" name="transferDate">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-4">
          <h4>Transfer To:</h4>
        </div>
      </div>

      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Transfer To(Department)</label>
        <div class="col-sm-4">
          <select class="form-control" name="transferDepartment">
            <option selected>Select Department</option>
            <option value="Accounts & Finance">Accounts & Finance</option>
            <option value="Administration">Administration</option>
            <option value="Graphics & Multimedia">Graphics & Multimedia</option>
            <option value="Human Resource">Human Resource</option>
            <option value="Information Technology">Information Technology</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Transfer To(Station)</label>
        <div class="col-sm-4">
          <select class="form-control" name="transferStation">
            <option selected>Select Station</option>
            <option value="WebHR Head Office">WebHR Head Office</option>
            <option value="WebHR Regional Office">WebHR Regional Office</option>
            <option value="Others">Others</option>    
          </select>
        </div>

      </div>

      

      <div class="form-group row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <input class="btn btn-primary btn-block" type="submit" name="btn" value="Submit">
        </div>
      </div>

      

    </form>
  </div>

        </div>
      </div>
    </div>
    <!--footer-->
   <?php include_once 'include/footer.php'; ?>