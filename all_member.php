
 <?php 
  include_once 'include/header.php';
 include 'classes/Superadmin.php';
    $obj_sup = new Superadmin();
 
        $statment=$obj_sup->view_all_member_info();
      


 ?>
 <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />
   
    <!-- header-starts -->
    
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <h3 class="title1">Existing Employees</h3>
        <!-- <div class="col-sm-12 text-right">
                <a class="btn btn-primary" href="onbording.php" role="button">Back</a>
              </div> -->
        <div class="blank-page widget-shadow scroll" id="style-2 div1">
          
         <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Company Name</th>
                <th>Designation/Job Title</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>View</th>
                 
            </tr>
        </thead>
        
        <tbody>
        <?php while($row = $statment->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
                <td><?php echo $row['fullName']; ?></td>
                <td><?php echo $row['companyName']; ?></td>
                <td><?php echo $row['jobTitle']; ?></td>
                <td><?php echo $row['emailAddress']; ?></td>
                <td><?php echo $row['mobileNumber']; ?></td>
                
                <td class="center">
                            <a class="btn btn-primary" href="view.php?id=<?php echo $row['id']; ?>">
                                <i class="fa fa-eye" aria-hidden="true"></i>

                            </a>
                            
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
      </div>
    </div>
    <!--footer-->
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    
    <script>
       $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
     
  <?php include_once 'include/footer.php';?>