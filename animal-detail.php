<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<html>
<head>
<title>People for animals | Animal Detail</title>
<link rel="icon" href="gif/funnygifsbox.com-2019-05-22-12-24-43-5.gif">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--lightbox-->
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<script src="js/jquery.lightbox.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
<!--lightbox-->
</head>
<body>
<?php include_once('includes/header.php');?>
		<div class="banner-header">
			<div class="container">
				<h2>Animal Detail</h2>
			</div>
			</div>
	<div class="content">
	<!--gallery-->
			<div class="gallery-section">
					<div class="container">	
				<div class="col-md-4 ">
						<?php 
						$anid=$_GET['anid'];
 $query=mysqli_query($con,"select * from tblanimal where ID='$anid'");
 while ($row=mysqli_fetch_array($query)) {
 ?>
					<img src="admin/images/<?php echo $row['AnimalImage'];?>" id="animal-det-img" alt=" "  width="400" height="300" style="border-radius:5px ;">
	</div>	
<div class="col-md-auto number-detail" style="padding-top:3rem; padding-left: 8rem;">
	<h3 style="padding-top: 10px;
						 font-weight: bold;
						 text-anchor: "><?php echo $row['AnimalName'];?>(<?php echo $row['Breed'];?>)</h3><br>
	<h4 style="padding-top: 0px">Breed: <?php echo $row['Breed'];?></p>
		<h4 style="padding-top: 10px">Cage Number: <?php echo $row['CageNumber'];?>.</h4>
<h4 style="padding-top: 10px">Feed Number: <?php echo $row['FeedNumber'];?>.</h4>
</div>
<div class="col-md-12">
	<h1 style="padding-top: 3rem;
	           text-align: left;">Description:</h1><br>
	<p style="text-align:left;"><?php echo $row['Description'];?>.</p>
</div>


					<?php }?>
				
				
				<div class="clearfix"> </div>
	
		</div>
	</div>
<!--gallery-->
<!--specials-->
		<?php include_once('includes/special.php');?>
			</div>
		<?php include_once('includes/footer.php');?>
</body>
</html>