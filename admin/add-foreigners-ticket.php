<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['zmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    $vname=$_POST['visitorname'];
    $noadult=$_POST['noadult'];
    $nochildren=$_POST['nochildren'];
    $aprice=$_POST['aprice'];
    $cprice=$_POST['cprice'];
    $ticketid=mt_rand(100000000, 999999999);
   
        $query=mysqli_query($con, "insert into  tblticforeigner(visitorName,TicketID,NoAdult,NoChildren,AdultUnitprice,ChildUnitprice) value('$vname','$ticketid','$noadult','$nochildren','$aprice','$cprice')");
    if ($query) {
    
     echo '<script>alert("Ticket has been generated")</script>';
     echo "<script>window.location.href='view-foreigner-ticket.php?viewid=$ticketid'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }

  
}

  
  ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Foreigner Ticket - Park Ticket Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    
</head>

<body>
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
     <?php include_once('includes/sidebar.php');?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
          <?php include_once('includes/header.php');?>
            <!-- header area end -->
            <!-- page title area start -->
           <?php include_once('includes/pagetitle.php');?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add Ticket</h4>


                                        <form method="post" action="" name="">

    <div class="form-group">
                                                <label for="exampleInputEmail1">Visitor Name</label>
                                                <input type="text" class="form-control" id="visitorname" name="visitorname" aria-describedby="emailHelp" placeholder="Visitor Name" value="" required="true">
                                            </div>

                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Adult</label>
                                                <input type="text" class="form-control" id="noadult" name="noadult" aria-describedby="emailHelp" placeholder="No. of Adult" value="" required="true">
                                            </div>
                                         <div class="form-group">
                                                <label for="exampleInputEmail1">Children</label>
                                                <input type="text" class="form-control" id="nochildren" name="nochildren" aria-describedby="emailHelp" placeholder="No. of Childrens" value="" required="true">
                                                
                                            </div>
                                            <?php

$ret=mysqli_query($con,"select * from tbltickettype where TicketType='Foreigner Adult'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                             <input type="hidden" name="aprice" value="<?php  echo $row['Price'];?>">
                                             <?php } ?>

                                             <?php

$ret=mysqli_query($con,"select * from tbltickettype where TicketType='Foreigner Child'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                            <input type="hidden" name="cprice" value="<?php  echo $row['Price'];?>">
                                          
                                      <?php } ?>
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?php include_once('includes/footer.php');?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
<?php }  ?>