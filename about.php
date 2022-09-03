<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>People for animals | About </title>
	<link rel="icon" href="gif/funnygifsbox.com-2019-05-22-12-24-43-5.gif">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>

<body>
	<?php include_once('includes/header.php'); ?>

	<div class="banner-header">
		<div class="container">
			<h2>about</h2>
		</div>
	</div>
	<!--about-->
	<div class="content" >

		<!--advantage-->
		<div class="advantages">
			<div class="container" style="
    box-shadow: 0 1px 50px 3px  rgb(148, 148, 148,0.3); border-radius:8px; padding:20px; margin-top:20px;">
				<?php
				$query = mysqli_query($con, "select * from  tblpage where PageType='aboutus'");
				while ($row = mysqli_fetch_array($query)) {


				?>

					<div class="advantages-grids">
						<div class="col-md-12 advantage-grid">
							<div class="advantage">
								<h3><?php echo $row['PageTitle']; ?></h3>
								<h1 class="mbr-section-title display-3 heading-title text-xs-center" style="margin-bottom: 10px;text-align: left;">Purpose:</h1><br>
								<p style="text-align:left;"><?php echo $row['PageDescription']; ?>.</p>

								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
			</div><?php } ?>
		</div>
		<!--advantage-->
		<!--specials-->
		<?php include_once('includes/special.php'); ?>
	</div>
	<!--footer-->
	<?php include_once('includes/footer.php'); ?>
</body>

</html>