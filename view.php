
 <?php 
  include_once 'include/header.php';
 $id = $_GET['id'];
 // print_r($id);
    include 'classes/Superadmin.php';
    $obj_sup = new Superadmin();
 
        $statment=$obj_sup->view_single_member_info($id);
        $row = $statment->fetch(PDO::FETCH_ASSOC);


 ?>
    <!-- header-starts -->
    
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <h3 class="title1">View Employee</h3>
        <div class="blank-page widget-shadow scroll" id="style-2 div1">
           
        <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4"></div>
              <div class="col-sm-4 text-right">
                <a class="btn btn-primary" href="all_member.php" role="button">Back</a>
              </div>
            </div>


          <div class="form-group row">
    <div class="col-sm-4 text-center">
      <img class="img-circle" src="<?php echo $row['addImage']; ?>" alt="" height="120" width="120">
      <br>
      <h3><?php echo $row['fullName'];?></h3>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-8 text-center">
      <table class="table">
        <tbody style="text-align: left;">
          <tr>
            <td>Designation</td>
            <td>:</td>
            <td><?php echo $row['jobTitle'];?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $row['emailAddress'];?></td>
          </tr>
          <tr>
            <td>Company Name</td>
            <td>:</td>
            <td><?php echo $row['companyName'];?></td>
          </tr>
          <tr>
            <td>Station</td>
            <td>:</td>
            <td><?php echo $row['station'];?></td>
          </tr>
          <tr>
            <td>Department</td>
            <td>:</td>
            <td><?php echo $row['department'];?></td>
          </tr>
          <tr>
            <td>Employee Type</td>
            <td>:</td>
            <td><?php echo $row['employeeType'];?></td>
          </tr>
          <tr>
            <td>Employee Category</td>
            <td>:</td>
            <td><?php echo $row['employeeCategory'];?></td>
          </tr>
          <tr>
            <td>Work Shift</td>
            <td>:</td>
            <td><?php echo $row['workShift'];?></td>
          </tr>
          <tr>
            <td>Joined</td>
            <td>:</td>
            <td><?php echo $row['joiningDate'];?></td>
          </tr>
          <tr>
            <td>National ID</td>
            <td>:</td>
            <td><?php echo $row['nationalId'];?></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>:</td>
            <td><?php echo $row['gender'];?></td>
          </tr>
          <tr>
            <td>Date of Birth</td>
            <td>:</td>
            <td><?php echo $row['dateOfBirth'];?></td>
          </tr>
          <tr>
            <td>Address</td>
            <td>:</td>
            <td><?php echo $row['address'];?></td>
          </tr>
          <tr>
            <td>Mobile Number</td>
            <td>:</td>
            <td><?php echo $row['mobileNumber'];?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
           
        </div>
      </div>
    </div>
    <!--footer-->
   <?php include_once 'include/footer.php'; ?>