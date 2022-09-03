<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>People for Animals | Home Page</title>
<link rel="icon" href="gif/funnygifsbox.com-2019-05-22-12-24-43-5.gif">
<link rel="icon" href="gif/funnygifsbox.com-2019-05-22-12-24-43-5.gif">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
		<?php include_once('includes/header.php');?>
			<div class="header-banner">
				<div class="container">
					<div class="head-banner">
						<h3>Visit our pfa</h3>
						<p> A visit to a zoo offers us an opportunity to see the wild animals.Zoo is a place where we can see different animals and birds at one place. It has great attraction particularly for the children. A visit to a zoo gives us both information and entertainment. We come to learn about the rare species.</p>
					</div>
					<div class="banner-grids">
						<div class="col-md-6 banner-grid">
							<h4>What We Do</h4>
							<p>We rescue, treat, care for and rehabilitate urban wild animals with the aim of ultimately releasing them back into their natural habitats. Our team of veterinarians and animal welfare specialists, with the help of volunteers and conscientious citizens across the city, help our growing city care for its animals.</p>
						</div>
						<div class="col-md-6 banner-grid">
						<h4>What is Urban Wildlife?</h4>
							<p>The wide variety of non-domesticated species that we find in the parks, lakes, fields, roads, gardens and structures of the city, in our neighbouring forests, and on the untamed fringe lands of the city. Even the little birds in our balconies, the squirrels in our trees, the kites in our markets, and the snakes in our backyards are wild animals living amidst us.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--header-->
			<!--welcome-->
			<div class="content">
				<div class="welcome">
					<div class="container">
						<h2>Welcome to PFA</h2>
							<div class="welcome-grids">
								
								<?php 
 $query=mysqli_query($con,"select * from tblanimal order by rand() limit 4");
 while ($row=mysqli_fetch_array($query)) {
 ?>
								<div class="col-md-3 welcome-grid home-container" >
									<img src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt=" " class="img-responsive" />
									<div class="wel-info card-content">
										<h4><a href="animal-detail.php?anid=<?php echo $row['ID'];?>"><?php echo $row['AnimalName'];?>(<?php echo $row['Breed'];?>)</a></h4>
										<p><?php echo substr($row['Description'],0,50);?>.</p>
									</div>
								</div><?php }?>
								<br>
								<div class="clearfix"></div>
							</div>
					</div>
				</div>
			<!--welcome-->
			
				<!--animals-->
					<div class="animals">
						<div class="container">
							<h3>animals</h3>
							<div class="clients">
								<ul id="flexiselDemo3">
									<?php 
 $query=mysqli_query($con,"select * from tblanimal");
 while ($row=mysqli_fetch_array($query)) {
 ?>
									<li><img 
									style="width:280px;
									height:240px;"
									src="admin/images/<?php echo $row['AnimalImage'];?>" width=200 height=200 alt=" " class="img-responsive" /></li><?php }?>
								</ul>
									<script type="text/javascript">
								$(window).load(function() {
									
								  $("#flexiselDemo3").flexisel({
										visibleItems: 4,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 1
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 2
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									});
									
							function facebookre()
						{
							window.open = "https://www.w3schools.com";
						}
				
								</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--models-->
		
				
						<!--events-->
						<!--specials-->
				 <?php include_once('includes/special.php');?>
			</div>
			<!--footer-->
			<?php include_once('includes/footer.php');?>
</body>
</html>
